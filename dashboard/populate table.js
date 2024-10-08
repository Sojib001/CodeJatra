// script.js
// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {

    // fetch("http://localhost:5000/") // Point to your Flask app route
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error("Network response was not ok");
    //         }
    //         return response.json();
    //     })
    // Send an AJAX request


    var xhr = new XMLHttpRequest();
    xhr.open("GET", "http://localhost/upcoming_contest_table.php", true); // Point to your PHP file
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var data = JSON.parse(xhr.responseText);
            populateTable(data);
        }
    };
    xhr.send();
});

// Function to populate the table with data
function populateTable(data) {
    let delete_contest_data = new URLSearchParams();
    // Get the table body element
    var tableBody = document.getElementById("table-body");

    // Clear existing table rows
    tableBody.innerHTML = "";
    // Loop through the data array and create table rows
    for (var i = 0; i < data.length; i++) {

        var rowData = data[i];

        // Loop through each key-value pair in the row data
        var contest_ID = rowData["Contest_ID"];
        var contestName = rowData["Contest_Name"];
        var site = rowData["Site"];
        var start = rowData["Start"];
        var duration = rowData["Duration"];
        var link = rowData["Link"];

        // extracting contest duration in minutes and hours
        var days = 0;
        var hours = 0;
        var minutes = 0;
        if (duration.includes('d')) {
            var matches = duration.match(/(\d+)d (\d+)h (\d+)m/)
            days = matches[1];
            hours = matches[2];
            minutes = matches[3];
        }
        else if (duration.includes('m')) {
            let matches = duration.match(/(\d+)h (\d+)m/);
            hours = matches[1];
            minutes = matches[2];
        }
        else {
            let matches = duration.match(/(\d+)h/);
            hours = matches[1];
        }



        var contest_start_time = new Date(start)
        var contest_end_time = new Date(start)
        var deviceDate = new Date();
        contest_end_time.setHours(contest_start_time.getHours() + parseInt(hours) + parseInt(days*24))
        contest_end_time.setMinutes(contest_start_time.getMinutes() + parseInt(minutes))

        if (deviceDate > contest_end_time) {
            // delete duration over contest from database
            delete_contest_data.append('contest_id', contest_ID);
            continue;
        }
        // Create a new row element
        var row = document.createElement("tr");

        // creating cell for contest name
        var contestNameCell = document.createElement("td");
        contestNameCell.textContent = contestName;
        row.appendChild(contestNameCell);

        // creating cell for contest site
        var siteCell = document.createElement("td");
        var main_div = document.createElement("div");
        main_div.classList.add("site");
        var running_status = document.createElement("div");
        var span = document.createElement("span");
        span.classList.add("running_status");
        running_status.appendChild(span);
        var text = document.createElement("div");
        text.classList.add("site-text");
        text.textContent = site;
        if (deviceDate < contest_start_time || deviceDate > contest_end_time)
            span.classList.add("make-invisible");
        main_div.appendChild(running_status);
        main_div.appendChild(text);
        siteCell.appendChild(main_div);
        row.appendChild(siteCell);



        // Create the "start" cell
        var startCell = document.createElement("td");
        startCell.textContent = start;
        row.appendChild(startCell);




        // Create the "Duration" cell
        var durationCell = document.createElement("td");
        durationCell.textContent = duration;
        row.appendChild(durationCell);

        // Create the "Link" cell
        const linkCell = document.createElement('td');
        const a = document.createElement('a');
        a.setAttribute('href', link);
        a.setAttribute('target', '_blank'); // Open the link in a new tab
        a.innerHTML = "<i class='bx bx-link-external link'></i>";
        linkCell.appendChild(a);
        row.appendChild(linkCell);

        // Create the "Add Reminder" cell
        const addreminderCell = document.createElement('td');
        // Add the <i> element with the specified classes
        addreminderCell.innerHTML = "<i class='bx bx-calendar add-reminder addReminderBtn'></i>";
        row.appendChild(addreminderCell);

        // Append the row to the table body
        tableBody.appendChild(row);

    }
    // Make a POST request to the PHP script
    fetch('https://codejatra.000webhostapp.com/delete by contestID.php', {
        method: 'POST',
        body: delete_contest_data
    });
}



document.addEventListener('click', function (event) {
    if (event.target.classList.contains('addReminderBtn')) {
        var button = event.target;
        var row = button.closest('tr');

        var duration = 0;
        var cells = row.cells;
        var contest_name_info = cells[0].innerText;
        var site_info = cells[1].innerText;
        var startDate = cells[2].innerText;
        var durationString = cells[3].innerText;

        // Replace the space with 'T'
        var iso8601String = startDate.replace(' ', 'T');
        // Remove dashes and colons
        var startDateFormatted = iso8601String.replace(/[-:]/g, '');

        if (durationString.match(/(\d+)h\s*(\d+)m/) == null) {
            matches = durationString.match(/(\d+)h/)
            duration = duration + parseInt(matches[1]) * 60
        }
        else {
            matches = durationString.match(/(\d+)h\s*(\d+)m/)
            duration = duration + parseInt(matches[1]) * 60
            duration = duration + parseInt(matches[2])
        }

        var endDate = new Date(new Date(startDate).getTime() + (duration * 60000))
        var endDate2 = new Date(endDate);

        // Extract the date components
        var year = endDate2.getFullYear(); // Get the year (YYYY)
        var month = endDate2.getMonth() + 1; // Get the month (0-11, add 1 to get 1-12)
        var day = endDate2.getDate(); // Get the day of the month (1-31)
        var hours = endDate2.getHours(); // Get the hours (0-23)
        var minutes = endDate2.getMinutes(); // Get the minutes (0-59)
        var seconds = endDate2.getSeconds(); // Get the seconds (0-59)

        // Format the end date components as a string in the 20240408T203500 format
        var formattedEndDate = year +
            (month < 10 ? "0" + month : month) +
            (day < 10 ? "0" + day : day) +
            "T" +
            (hours < 10 ? "0" + hours : hours) +
            (minutes < 10 ? "0" + minutes : minutes) +
            (seconds < 10 ? "0" + seconds : seconds);

    
        var googleCalendarUrl = 'https://calendar.google.com/calendar/render?action=TEMPLATE' +
            '&text=' + encodeURIComponent(contest_name_info) +
            '&dates=' + encodeURIComponent(startDateFormatted) + '/' + encodeURIComponent(formattedEndDate) +
            '&details=' + encodeURIComponent("<b>Site: </b>" + site_info + "<br><b>Duration: </b>" + durationString)  +
            '&duration=' + encodeURIComponent(duration);

        window.open(googleCalendarUrl, '_blank');
    }
});

