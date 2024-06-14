// Define the handle

if (localStorage.getItem("dark") === null) {
    localStorage.setItem("dark", 0)
}
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
        url = `https://codeforces.com/api/user.status?handle=${given_handle}&from=1&count=1000000000`;
        // Fetching data from the API
        fetch(url)
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
                var userData = data.result;
                var dataToUpdate = []
                for (var i = 0; i < userData.length; i++) {
                    var problem_link = `https://codeforces.com/problemset/problem/${String(userData[i].contestId)}/${userData[i].problem.index}`;

                    var problem_id = String(userData[i].contestId) + userData[i].problem.index

                    var solved = 0
                    if (userData[i].verdict == "OK") {
                        solved = 1
                    }

                    var rating = 0
                    if (userData[i].problem.rating != null)
                        rating = userData[i].problem.rating
                    var obj = {
                        "problem_name": userData[i].problem.name,
                        "solved_by": given_handle,
                        "problem_id": problem_id,
                        "problem_link": problem_link,
                        "rating": rating,
                        "tags": userData[i].problem.tags,
                        "solved": solved,
                        "attempted": 1,
                        "last_update": userData[i].creationTimeSeconds
                    }
                    dataToUpdate.push(obj)
                }
                // Sort dataToUpdate by ascending order of last_update
                dataToUpdate.sort((a, b) => a.last_update - b.last_update);
                var jsonBody = JSON.stringify(dataToUpdate);
                fetch('http://localhost/problems.php', {
                    method: 'POST',
                    body: jsonBody,
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                    .then(response => {
                        console.log(response)
                        // Check if response is OK
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        // Parse JSON response
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