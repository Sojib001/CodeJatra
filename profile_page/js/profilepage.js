const body = document.querySelector("body");
const sidebar = body.querySelector(".sidebar");
const toggle = body.querySelector(".toggle");
const searchBar = body.querySelector(".search-box");
const modeSwitch = body.querySelector(".toggle-switch");
const modeText = body.querySelector(".mode-text");
const rightPartition = document.querySelector(".right-partition");


if (localStorage.getItem("sidebar") == 1) {
    sidebar.classList.remove("close")
}

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close")
    rightPartition.classList.toggle("right-partition-close");
    if (sidebar.classList.contains("close")) {
        localStorage.setItem("sidebar", 0)
    }
    else {
        localStorage.setItem("sidebar", 1)
    }
    console.log(localStorage.getItem('sidebar'))
})

searchBar.addEventListener("click", () => {
    sidebar.classList.remove("close");
    localStorage.setItem("sidebar", 1)
});
if (localStorage.getItem("dark") == 1) {
    body.classList.add("dark")
}

modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        modeText.innerText = "Light Mode";
        rightPartition.classList.add("dark-mode");
        rightPartition.classList.remove("light-mode");
    } else {
        modeText.innerText = "Dark Mode";
        
        rightPartition.classList.add("light-mode");
        rightPartition.classList.remove("dark-mode");
    }
    drawGooglePieChart();
});

// profile_page.js or any other relevant JavaScript file

document.addEventListener('DOMContentLoaded', function() {
    // Assuming userHandle is already defined in the script from profile_page.php
    const handle = userHandle;

    // Fetch data from getChartData.php
    fetch('getChartData.php?handle=' + encodeURIComponent(handle))
        .then(response => response.json())
        .then(data => {
            // Data received, now create Chart.js pie chart
            var ctx = document.getElementById('myPieChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.formattedValue;
                                }
                            }
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});




// document.addEventListener("DOMContentLoaded", function() {
//     // const tableRows = document.querySelectorAll('#mytable tbody tr');

//     // Initialize an object to store counts for each status
//     const statusCounts = {
//         'Accepted': 0,
//         'Wrong Answer': 0,
//         'Time Limit Exceeded': 0,
//         'Runtime Error': 0,
//         'Compile Error': 0,
//         'Other': 0
//     };

//     // Iterate through table rows to count each status
//     // tableRows.forEach(function(row) {
//     //     const status = row.cells[3].textContent.trim(); // Assuming Status is in the fourth cell (index 3)
        
//     //     // Increment count for the corresponding status
//     //     if (statusCounts.hasOwnProperty(status)) {
//     //         statusCounts[status]++;
//     //     } else {
//     //         statusCounts['Other']++;
//     //     }
//     // });

//     // Extract data for chart
//     const labels = Object.keys(statusCounts);
//     const data = labels.map(label => statusCounts[label]);
//     const backgroundColors = ['#4CAF50', '#FF5252', '#FFC107', '#FF9800', '#2196F3', '#9C27B0'];

//     // Chart.js for pie chart
//     const ctx = document.getElementById('myPieChart').getContext('2d');
//     const myPieChart = new Chart(ctx, {
//         type: 'pie',
//         data: {
//             labels: labels,
//             datasets: [{
//                 label: 'Total Submissions',
//                 data: data,
//                 backgroundColor: backgroundColors
//             }]
//         },
//         options: {
//             responsive: true
//         }
//     });
// });



// document.addEventListener('DOMContentLoaded', function() {
//     const tableRows = document.querySelectorAll('#mytable tbody tr');
    
//     tableRows.forEach(function(row) {
//         row.addEventListener('click', function() {
//             const problemName = this.cells[1].textContent; // Assuming Problem Name is in the second cell (index 1)
    
//             // Update the problem name in the <p> tag
//             const problemNameDisplay = document.getElementById('problemName');
//             problemNameDisplay.innerHTML = `<strong>Problem Name:</strong> <span style="font-weight: normal;">${problemName}</span>`;
//         });
//     });
//     });



document.addEventListener('DOMContentLoaded', function() {
    const tableRows = document.querySelectorAll('#mytable tbody tr');
   
    // Check if there are any rows in the table
    if (tableRows.length > 0) {
        // Get the first row
        const firstRow = tableRows[0];
        
        // Extract problem name from the first row (assuming it's in the second cell)
        const problemName = firstRow.cells[1].textContent.trim(); // Adjust index if necessary
    
        // Update the problem name in the <p> tag
        const problemNameDisplay = document.getElementById('problemName');
        if (problemNameDisplay) {
            problemNameDisplay.innerHTML = `<strong>Problem Name:</strong> <span style="font-weight: normal;">${problemName}</span>`;
        }
    }
    });
