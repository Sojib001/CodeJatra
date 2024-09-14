from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import TimeoutException
from datetime import datetime, timedelta
import mysql.connector
import time

# Configure Chrome options to run in headless mode
chrome_options = Options()
chrome_options.add_argument("--headless")  # Run in headless mode
chrome_options.add_argument("--disable-gpu")  # Disable GPU acceleration (not required but recommended)
chrome_options.add_argument("--no-sandbox")  # Required for running in a Docker container
chrome_options.add_argument("--disable-dev-shm-usage")  # Required for running in a Docker container

# Initialize the WebDriver (assuming you have chromedriver installed)
driver = webdriver.Chrome(options=chrome_options)

# Navigate to Codeforces
driver.get("https://codeforces.com/contests?complete=true")

# Add Cloudflare cookie to bypass CAPTCHA
driver.add_cookie({
    'name': 'cf_clearance',  # The name of the cookie
    'value': 'FLmC8DvNFVAvb7Q5cjO8kGpwbhbYXkENIbcjKZ0Rw0Q-1726237936-1.2.1.1-WrWNGd1iS8EJV18TJAX1KazxvICeiDvj8Qj6HeoTRNPmpImnTVrNvJ.Cw.kULCiAoilzDJBB.T69VpiEXlZpyr2f6bOCXEo4EKjIq3EdeejxhDaU0iMmYWyoAVx690eDTbBaz3_TA.n3.__.YgU.GcTmML0rsSy2zg1.PV0BtJY7l_eLOqZ1YD7xviQ6wxa87FL5.4WbT4h1YdAdrmGgI0pUz2q9lVa3ziYDx7S1dUwpjmFKavjH50dK78hzkUAV4Fp2Of_ro2eUFM6HGRRtHBOTs8LMZqcO.S3CJda_TQZj7p4.oGTtf5z8uCgHgON7Az38gx91RiE55OxHyix8QkvVd02_rl597ys2eiiRWo_r7g.nxh6SWBxlN81L2YKD',  # The value of your cookie (make sure it's updated and correct)
    'domain': 'codeforces.com'  # The domain to which the cookie applies
})

# Reload the page after setting the cookie
driver.get("https://codeforces.com/contests?complete=true")

# Wait for the contests table to load by waiting for a specific element inside the table
try:
    WebDriverWait(driver, 30).until(
        EC.presence_of_element_located((By.CLASS_NAME, "contests-table"))
    )
except TimeoutException:
    print("Table element not found within the given time.")
    driver.save_screenshot("error_screenshot.png")  # Capture a screenshot for debugging
    driver.quit()
    exit()

# Sleep for additional seconds if needed (backup for slower JS rendering)
time.sleep(5)

# Connect to the database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="ip project"
)

# Create a cursor object to execute queries
cursor = db.cursor()

# Find the table element
table = driver.find_element(By.TAG_NAME, "tbody")

# Find all rows in the table using XPath
rows = table.find_elements(By.TAG_NAME, "tr")

# Iterate through each row
format_string = "%b/%d/%Y %H:%M"
flg = 1
for row in rows:
    if flg:
        flg = 0
        continue
    
    # Extract Contest ID
    ID = row.get_attribute('data-contestid')

    # Contest Name
    contest_name_cells = row.find_elements(By.CLASS_NAME, "left")
    contest_name = contest_name_cells[0].text

    # Start Time
    start_time_element = row.find_element(By.XPATH, ".//a[contains(@href, 'timeanddate')]")
    start = start_time_element.text.replace("UTC+6", '').strip()
    try:
        date_time_object = datetime.strptime(start, format_string)
    except ValueError:
        print(f"Error parsing start time for Contest ID {ID}: {start}")
        continue

    # Duration
    duration_cells = row.find_elements(By.XPATH, ".//td[not(a)]")
    formatted_duration = None
    for duration_cell in duration_cells:
        if duration_cell.text.strip():  # Check if the cell is not empty
            try:
                # Check if duration format is HH:MM:SS or HH:MM
                duration_parts = duration_cell.text.split(':')
                if len(duration_parts) == 3:
                    hours, minutes, seconds = map(int, duration_parts)
                    formatted_duration = f"{hours}h {minutes}m {seconds}s"
                elif len(duration_parts) == 2:
                    hours, minutes = map(int, duration_parts)
                    formatted_duration = f"{hours}h {minutes}m"
            except ValueError:
                print(f"Error parsing duration for Contest ID {ID}: {duration_cell.text}")
                formatted_duration = None  # Skip if the format doesn't match

    # Registration Link
    link = f"https://codeforces.com/contestRegistration/{ID}"

    # Insert into the database
    try:
        sql = "INSERT INTO upcoming_contests (Contest_ID, Contest_Name, Site, Start, Duration, Link) VALUES (%s, %s, %s, %s, %s, %s)"
        data = (ID, contest_name, 'CodeForces', date_time_object, formatted_duration, link)
        cursor.execute(sql, data)
    except mysql.connector.Error as err:
        if err.errno == 1062:  # Duplicate entry
            print(f"Duplicate entry detected for contest ID: {ID}")
        else:
            print(f"Database error: {err}")

# Commit the transaction
db.commit()

# Close the cursor and database connection
cursor.close()
db.close()

# Close the WebDriver
driver.quit()

print("Successfully inserted data.")
