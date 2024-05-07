from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from datetime import datetime
import mysql.connector

# Configure Chrome options to run in headless mode

chrome_options = Options()
chrome_options.add_argument("--headless")  # Run in headless mode
chrome_options.add_argument("--disable-gpu")  # Disable GPU acceleration (not required but recommended)
chrome_options.add_argument("--no-sandbox")  # Required for running in a Docker container
chrome_options.add_argument("--disable-dev-shm-usage")  # Required for running in a Docker container

# Connect to the database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="ip project"
)

# Create a cursor object to execute queries
cursor = db.cursor()

# Initialize the WebDriver (assuming you have chromedriver installed)
driver = webdriver.Chrome(options=chrome_options)

# Navigate to the webpage
driver.get("https://codeforces.com/contests?complete=true")

# Find the contests table element on the page using its class
table = driver.find_element(By.TAG_NAME, "table")

# Find all rows in the table using XPath
rows = table.find_elements(By.TAG_NAME, "tr")

# Iterate through each row
format_string = "%b/%d/%Y %H:%M"
flg = 1
for row in rows:
    if(flg):
        flg = 0
        continue
    # Find all cells in the row using XPath

    # Find all contest IDs in the row using XPath
    ID = row.get_attribute('data-contestid')


    # Find all contest names in the row using XPath
    contest_name_cells = row.find_elements(By.CLASS_NAME, "left")

    # Find all start times in the row using XPathS
    start_time_cells = row.find_elements(By.XPATH, ".//td[a]")
    for start_time_cell in start_time_cells:
        start = start_time_cell.text
        if("UTC+6" in start):
            start= start.replace("UTC+6", '')
            date_time_object = datetime.strptime(start, format_string)


    # Find all duration in the row using XPathS 
    duration_cells = row.find_elements(By.XPATH, ".//td[not(a)]")
    indx = 0
    for duration_cell in duration_cells:
        if duration_cell.text.strip():  # Check if the cell is not empty
            indx += 1
            if(indx == 2):
                temp = duration_cell.text
                if(len(temp) > 5):
                    temp = temp[:-3]
                duration_string = datetime.strptime(temp, "%H:%M")
                formatted_duration = "{}h {}m".format(duration_string.hour, duration_string.minute)
                if(formatted_duration[-2] == '0'):
                    formatted_duration = formatted_duration[:-2]
    
    # Find all registration links in the row using XPathS 
    
    link = "https://codeforces.com/contestRegistration/" + ID


    try:
    # Define the SQL query to insert data
        sql = "INSERT INTO upcoming_contests (Contest_ID, Contest_Name, Site, Start, Duration, Link) VALUES (%s, %s, %s, %s, %s, %s)"
    
    # Define the data to insert
        data = (ID, contest_name_cells[0].text, 'CodeForces', date_time_object, formatted_duration, link)
    
    # Execute the query with the data
        cursor.execute(sql, data)
    
    except mysql.connector.Error as err:
        if err.errno == 1062:  # MySQL error code for duplicate entry
            print("Error: Duplicate entry detected. Skipping insertion for contest ID:", ID)
        else:
            print("An error occurred:", err)



# Close the WebDriver
driver.quit()

# Commit the transaction
db.commit()

# Close the cursor and database connection
cursor.close()
db.close()
print("Successfull")
