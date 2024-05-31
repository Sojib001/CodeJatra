// Define the handle

if (localStorage.getItem("dark") === null) {
    localStorage.setItem("dark", 0)
}
const given_handle = "b_AHA_r";

// Construct the API URL with the handle variable
const Url1 = `https://codeforces.com/api/user.info?handles=${given_handle}&checkHistoricHandles=true`;

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
        var handle2 = data.result[0].handle
        url = `https://codeforces.com/api/user.status?handle=${handle2}&from=1&count=1000000000`;
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
                const userData = data.result;
                const dataToUpdate = []
                for (var i = 0; i < userData.length; i++) {
                    const problem_link = `https://codeforces.com/problemset/problem/${String(userData[i].contestId)}/${userData[i].problem.index}`;

                    const problem_id = String(userData[i].contestId) + userData[i].problem.index

                    var solved = 0
                    if (userData[i].verdict == "OK") {
                        solved = 1
                    }

                    var rating = 0
                    if (userData[i].problem.rating != null)
                        rating = userData[i].problem.rating
                    const obj = {
                        "problem_name": userData[i].problem.name,
                        "solved_by": handle2,
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
                const jsonBody = JSON.stringify(dataToUpdate);
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
        console.error('There was a problem with the first fetch operation:', error);
    });

// Construct the API URL with the handle2 variable
