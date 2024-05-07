// Define the handle
const handle = "doge_bonk";

// Construct the API URL with the handle variable
const apiUrl = `https://codeforces.com/api/user.info?handles=${handle}&checkHistoricHandles=true`;

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
    const userData = data.result[0];
    console.log(userData); // Output the fetched data
    console.log(userData.maxRank); // Output the fetched data
    // Now you can do whatever you want with the userData
    const dataToUpdate = {
      Email: "sajibbhattacharjee128@gmail.com",
      Name: "Sojib",
      codeforces_handle: userData.handle,
      atcoder_handle: "sojib_003",
      codeforces_current_rating: userData.rating,
      codeforces_max_rating: userData.maxRating,
      codeforces_titlephoto: userData.titlePhoto,
      codeforces_current_rank: userData.rank,
      codeforces_max_rank: userData.maxRank,
      atcoder_current_rank: "4 kyu",
      atcoder_max_rank: "3 kyu",
      atcoder_current_rating: 1200,
      atcoder_max_rating: 1300,
      atcoder_contest_count: 10
    };
    const jsonBody = JSON.stringify(dataToUpdate);
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
        // Parse JSON response
        console.log("Data sent")
      })

  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });
