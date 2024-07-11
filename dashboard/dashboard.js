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


if (localStorage.getItem("sidebar") == 1) {
  sidebar.classList.remove("close")
}

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close")
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