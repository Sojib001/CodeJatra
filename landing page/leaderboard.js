// Retrieve the email from localStorage
var email = localStorage.getItem('email');

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
    var apiUrl = `http://localhost/pie_chart.php?handle=${given_handle}`;

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
        var solved = 0;
        var submission = 0;
        for (var i = 0; i < data.length; i++) {
          solved += data[i].Solved;
          submission += data[i].Attempted;
        }
        var dataToUpdate = {
          solved: solved,
          submission: submission
        };
        var jsonBody = JSON.stringify(dataToUpdate);
        fetch(`http://localhost/leaderboard.php?handle=${given_handle}`, {
          method: 'POST',
          body: jsonBody,
          headers: {
            'Content-Type': 'application/json'
          }
        })
          .then(response => {
            // Check if response is OK
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json(); // Parse JSON response if needed
          })
          .then(responseData => {
            console.log(responseData); // Log the response from the server
          })
          .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
          });
      })
      .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
      });

  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });
