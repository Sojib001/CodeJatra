const body = document.querySelector("body")
const sidebar = body.querySelector(".sidebar")
const toggle = body.querySelector(".toggle")
const searchBar = body.querySelector(".search-box")
const modeSwitch = body.querySelector(".toggle-switch")
const modeText = body.querySelector(".mode-text")
const title = document.title;

const glow_swich = document.getElementById(title)
glow_swich.classList.add("glow")
if (localStorage.getItem("dark") == 1) {
    body.classList.add("dark")
}

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close")
})
searchBar.addEventListener("click", () => {
    sidebar.classList.remove("close")
})


modeSwitch.addEventListener("click", () => {
    body.classList.toggle("dark")
    
    if (body.classList.contains("dark")) {
        modeText.innerText = "Light Morde"
        localStorage.setItem("dark", 1)
    }
    else {
        modeText.innerText = "Dark Morde"
        localStorage.setItem("dark", 0)
    }
})

var email = localStorage.getItem('email');

// Define the first API URL using the encoded email
var apiUrl_to_get_handle = `http://localhost/data_from_registered_people.php?email=${email}`;

var handle_local; // Define handle in a broader scope

fetch(apiUrl_to_get_handle)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    handle = data[0].codeforces_handle;
    localStorage.setItem('handle', handle_local)
    console.log("Done")
})
.catch(error => {
  console.error('There was a problem with the fetch operation:', error);
});
