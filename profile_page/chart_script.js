const body_chart = document.querySelector("body")
function drawGooglePieChart() {

  google.charts.load("current", { packages: ["corechart"] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://localhost/problem_solved_count_pie_chart.php', true);

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        var data_from_table = JSON.parse(xhr.responseText)
        for (var i = 0; i < data_from_table.length; i++) {
          var item = data_from_table[i];
          if (item['email'] == "sajibbhattacharjee128@gmail.com") {
            var item = data_from_table[i];
            break
          }
        }
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Greedy', parseInt(item['Greedy'])],
          ['Implementation', parseInt(item['Implementation'])],
          ['Graph', parseInt(item['Graph'])],
          ['DP', parseInt(item['DP'])],
          ['Math', parseInt(item['Math'])],
          ['Others', parseInt(item['Others'])]
        ]);
        console.log(item['Others'])
        background = '#FFFFFF'
        text_color = '#707070'
        if (body_chart.classList.contains("dark")) {
          background = '#242526'
          text_color = '#FFFFFF'
        }
        var options = {
          title: 'Problems Solved',
          // Set font size to 20px
          fontSize: 11,
          titleTextStyle: {
            fontSize: 25, // Increase the font size to 24px
            textAlign: 'center',
            color: text_color
          },
          legend: {
            textStyle: {
              color: text_color, // Set legend text color here
              fontSize: 14, // Set legend font size here
            }
          },
          backgroundColor: background,
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }

    };
    xhr.send();
  }
}
