const body_chart = document.querySelector("body")

function drawGooglePieChart() {

  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    // Define the handle
    var email = localStorage.getItem('email');
    console.log(email)
    // Define the first API URL using the encoded email
    var apiUrl1 = `http://localhost/data_from_registered_people.php?email=${email}`;


    fetch(apiUrl1)
      .then(response => {
        // Check if response is OK
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        // Parse JSON response
        console.log(response)
        return response.json();
      })
      .then(data => {
        var given_handle = data[0].codeforces_handle
        console.log(given_handle)
        const apiUrl = `http://localhost/pie_chart.php?handle=${given_handle}`;
        fetch(apiUrl)
          .then(response => {
            // Check if response is OK
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            // Parse JSON response
            return response.json();
          })
          .then(data => {
            // Handle the fetched data
            var greedy = 0;
            var Implementation = 0;
            var Graph = 0;
            var DP = 0;
            var Math = 0;
            var constructive_algorithms = 0;
            var bruteforce = 0;
            var Others = 0;
            var solved = 0;
            var submission = 0;
            for (var i = 0; i < data.length; i++) {
              solved += data[i].Solved
              submission += data[i].Attempted

              var flg = 0;
              if (data[i].Tags.includes("greedy")) {
                flg = 1;
                greedy++;
              }
              if (data[i].Tags.includes("implementation")) {
                flg = 1;
                Implementation++;
              }
              if (data[i].Tags.includes("graph") | data[i].Tags.includes("dfs and similar") | data[i].Tags.includes("dsu")) {
                flg = 1;
                Graph++;
              }
              if (data[i].Tags.includes("dp")) {
                flg = 1;
                DP++;
              }
              if (data[i].Tags.includes("math")) {
                flg = 1;
                Math++;
              }
              if (data[i].Tags.includes("constructive algorithms")) {
                flg = 1;
                constructive_algorithms++;
              }
              if (data[i].Tags.includes("bruteforce")) {
                flg = 1;
                bruteforce++;
              }
              if (flg == 0) {
                Others++;
              }
            }
            var solved_count = document.getElementById('solved');
            var attempted = document.getElementById('attempted');
            solved_count.innerText = solved
            attempted.innerText = submission
            console.log(submission)
            var data = google.visualization.arrayToDataTable([
              ['Count', 'Solve percentage'],
              ['Greedy', greedy],
              ['Implementation', Implementation],
              ['Graph', Graph],
              ['DP', DP],
              ['Math', Math],
              ['constructive algorithms', constructive_algorithms],
              ['bruteforce', bruteforce],
              ['Others', Others]
            ]);
            background = '#FFFFFF'
            text_color = '#707070'
            if (body_chart.classList.contains("dark")) {
              background = '#242526'
              text_color = '#FFFFFF'
            }
            var options = {
              title: 'Problems Solved',
              // Set font size to 20px
              fontSize: 12,
              titleTextStyle: {
                fontSize: 25, // Increase the font size to 24px
                textAlign: 'center',
                color: text_color
              },
              legend: {
                textStyle: {
                  color: text_color, // Set legend text color here
                  fontSize: 15, // Set legend font size here
                }
              },
              backgroundColor: background,
              is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
          })
          .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
          });
          
        })
        .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
        });
    // Construct the API URL with the handle variable



  }
}
