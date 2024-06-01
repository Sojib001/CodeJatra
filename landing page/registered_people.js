// Define the handle

var handle = "doge_bonk";

// construct the API URL with the handle variable
var apiUrl = `https://codeforces.com/api/user.info?handles=${handle}&checkHistoricHandles=true`;

// Fetching data from the API
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
    // Store the data in a variable
    var userData = data.result[0];
    // Now you can do whatever you want with the userData
    var dataToUpdate = {
      Email: "sajibbhattacharjee128@gmail.com",
      Name: "Sojib",
      codeforces_handle: userData.handle,
      codeforces_current_rating: userData.rating,
      codeforces_max_rating: userData.maxRating,
      codeforces_titlephoto: userData.titlePhoto,
      codeforces_current_rank: userData.rank,
      codeforces_max_rank: userData.maxRank,
      country: "Bangladesh",
      Institute: "Chittagong University of Engineering and Technology",
      Solved: 0,
      Submission: 0
    };
    var jsonBody = JSON.stringify(dataToUpdate);
    fetch('http://localhost/registered_people.php', {
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
        console.log(response)
        // Parse JSON response
      })

  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });
