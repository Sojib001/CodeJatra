// Retrieve the email from localStorage
var email = localStorage.getItem('email');

// Define the first API URL using the encoded email
var apiUrl1 = `http://localhost/data_from_registered_people.php?email=${email}`;

let handle; // Define handle in a broader scope

fetch(apiUrl1)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    handle = data[0].codeforces_handle;
    var apiUrl_for_handle_info = `https://codeforces.com/api/user.info?handles=${handle}&checkHistoricHandles=true`;

    return fetch(apiUrl_for_handle_info);
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    var userData = data.result[0];
    var dataToUpdate = {
      Email: email,
      codeforces_handle: userData.handle,
      codeforces_current_rating: userData.rating,
      codeforces_max_rating: userData.maxRating,
      codeforces_titlephoto: userData.titlePhoto,
      codeforces_current_rank: userData.rank,
      codeforces_max_rank: userData.maxRank,
      Solved: 0,
      Submission: 0
    };

    var jsonBody = JSON.stringify(dataToUpdate);
    return fetch('http://localhost/registered_people.php', {
      method: 'POST',
      body: jsonBody,
      headers: {
        'Content-Type': 'application/json'
      }
    });
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    var url_to_get_all_problems = `https://codeforces.com/api/user.status?handle=${handle}&from=1&count=1000000000`;

    return fetch(url_to_get_all_problems);
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    var userData = data.result;
    var problem_data = [];

    for (var i = 0; i < userData.length; i++) {
      var problem_link = `https://codeforces.com/problemset/problem/${String(userData[i].contestId)}/${userData[i].problem.index}`;
      var problem_id = String(userData[i].contestId) + userData[i].problem.index;
      var solved = userData[i].verdict === "OK" ? 1 : 0;
      var rating = userData[i].problem.rating || 0;
      var obj = {
        problem_name: userData[i].problem.name,
        solved_by: handle,
        problem_id: problem_id,
        problem_link: problem_link,
        rating: rating,
        tags: userData[i].problem.tags,
        solved: solved,
        attempted: 1,
        last_update: userData[i].creationTimeSeconds
      };
      problem_data.push(obj);
    }

    problem_data.sort((a, b) => a.last_update - b.last_update);
    var jsonBody = JSON.stringify(problem_data);

    return fetch('http://localhost/problems.php', {
      method: 'POST',
      body: jsonBody,
      headers: {
        'Content-Type': 'application/json'
      }
    });
  })
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }

    // Fetch additional data and update the leaderboard
    var url_to_get_data_for_pie_chart = `http://localhost/pie_chart.php?handle=${handle}`;

    return fetch(url_to_get_data_for_pie_chart)
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      })
      .then(data => {
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
        console.log(handle)
        var jsonBody = JSON.stringify(dataToUpdate);
        return fetch(`http://localhost/leaderboard.php?handle=${handle}`, {
          method: 'POST',
          body: jsonBody,
          headers: {
            'Content-Type': 'application/json'
          }
        });
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        console.log(response);
        return response.json(); // Parse JSON response if needed
      })
      .then(responseData => {
        console.log(responseData); // Log the response from the server
        console.log('All data updated successfully.');
      });
  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });
