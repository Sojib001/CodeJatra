from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from datetime import datetime
import mysql.connector
import os
import re

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

# # Create a cursor object to execute queries
cursor = db.cursor()


def contestid_generator(contest_name):
    parts = contest_name.split()
    id = ""
    for i in range(len(parts)):
        if("AtCoder" in parts[i] and "Contest" in parts[i + 2]):
            id = id + 'a'
            id = id + parts[i+1][0]
            id = id + 'c'
            if(not parts[i + 3][-1].isdigit()):
                parts[i + 3] = parts[i + 3][:-1]

            id = id + parts[i+3]
            break
    return id.lower()

def extract_contest_duration(input_string):
    # Use regular expression to find the duration value within parentheses
    duration_match = re.search(r'\((\d+) minutes\)', input_string)
    
    if duration_match:
        duration_minutes = int(duration_match.group(1))
        return duration_minutes
    else:
        return None  # Return None if duration is not found


# Initialize the WebDriver (assuming you have chromedriver installed)
driver = webdriver.Chrome(options=chrome_options)
driver2 = webdriver.Chrome(options=chrome_options)


# Navigate to the webpage
driver.get("https://atcoder.jp/")
all_data = []
format_string = "%m/%d(%a) %H:%M" # date is in this format
link = "https://atcoder.jp/contests/"  # registration link

# scrapping the infromations of active contest
try:
    div_containing_upcoming_contest_table = driver.find_element(By.ID, "contest-table-active")
    table = div_containing_upcoming_contest_table.find_element(By.TAG_NAME, "table")

    # getting the rows of the table
    rows = table.find_elements(By.TAG_NAME, "tr")

    for row in rows:
        table_data=[]
        # getting the cells
        cells = row.find_elements(By.TAG_NAME, "td")
        if(len(cells) < 2):
            continue

        date = datetime.strptime(cells[0].text, format_string)   # converting the date into our format
        date = date.replace(year=datetime.now().year)   # replacing the year with current year
        contest_name = cells[1].text  # getting the contest name
        contestID = contestid_generator(contest_name)  # getting contest id

        driver2.get(link + contestID)
        duration_finder = driver2.find_element(By.CLASS_NAME, "contest-duration")
        duration_in_minutes  = extract_contest_duration(duration_finder.text)
        duration = f"{int(duration_in_minutes/60)}h {duration_in_minutes%60}m"

        try:
            sql = "INSERT INTO upcoming_contests (Contest_ID, Contest_Name, Site, Start, Duration, Link) VALUES (%s, %s, %s, %s, %s, %s)"
        
        # Define the data to insert
            data = (contestID, contest_name, "AtCoder", date, duration, link + contestID)
        
        # Execute the query with the data
            cursor.execute(sql, data)
        except mysql.connector.Error as err:
            if err.errno == 1062:  # MySQL error code for duplicate entry
                print("Error: Duplicate entry detected. Skipping insertion for contest ID:", contestID)
            else:
                print("An error occurred:", err)
except:
    print("No active contests")

# scrapping the infromations of upcoming contests
div_containing_upcoming_contest_table = driver.find_element(By.ID, "contest-table-upcoming")
table = div_containing_upcoming_contest_table.find_element(By.TAG_NAME, "table")

# getting the rows of the table
rows = table.find_elements(By.TAG_NAME, "tr")
for row in rows:
    table_data=[]
    
    # getting the cells
    cells = row.find_elements(By.TAG_NAME, "td")
    if(len(cells) < 2):
        continue

    date = datetime.strptime(cells[0].text, format_string)   # converting the date into our format
    date = date.replace(year=datetime.now().year)   # replacing the year with current year
    contest_name = cells[1].text  # getting the contest name
    contestID = contestid_generator(contest_name)  # getting contest id
    driver2.get(link + contestID)
    try:
        duration_finder = driver2.find_element(By.CLASS_NAME, "contest-duration")
        duration_in_minutes  = extract_contest_duration(duration_finder.text)
        duration = f"{int(duration_in_minutes/60)}h {duration_in_minutes%60}m"
    except:
        print(f"could not find duration for {contestID}")

    try:
        sql = "INSERT INTO upcoming_contests (Contest_ID, Contest_Name, Site, Start, Duration, Link) VALUES (%s, %s, %s, %s, %s, %s)"
    
    # Define the data to insert
        data = (contestID, contest_name, "AtCoder", date, duration, link + contestID)
    
    # Execute the query with the data
        cursor.execute(sql, data)
        print(f"Insertion of {contestID} is successful")
        print("\n\n")
    except mysql.connector.Error as err:
        if err.errno == 1062:  # MySQL error code for duplicate entry
            print("Error: Duplicate entry detected. Skipping insertion for contest ID:", contestID)
        else:
            print("An error occurred:", err)
        print("\n\n")


# Close the WebDriver
driver.quit()

# # Commit the transaction
db.commit()

# # Close the cursor and database connection
cursor.close()
db.close()
print("Successfull")
