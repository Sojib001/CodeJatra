document.addEventListener("DOMContentLoaded", function() {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(function(faqItem) {
        const question = faqItem.querySelector(".question");
        const answer = faqItem.querySelector(".answer");

        question.addEventListener("click", function() {
            answer.classList.toggle("show-answer");
        });
    });
});

const body = document.querySelector("body")
const sidebar = body.querySelector(".sidebar")
const toggle = body.querySelector(".toggle")
const searchBar = body.querySelector(".search-box")
const modeSwitch = body.querySelector(".toggle-switch")
const modeText = body.querySelector(".mode-text")
const rightPartition = document.querySelector(".right-partition")
const faqAnswers = document.querySelectorAll(".answer");
const title = document.title;
console.log(title)
const glow_swich = document.getElementById(title)
glow_swich.classList.add("glow")

if (localStorage.getItem("dark") == 1) {
    body.classList.add("dark")
}

function adjustAnswerPosition() {
    if (sidebar.classList.contains("close")) {
        faqAnswers.forEach(function(answer) {
            answer.style.marginLeft = "100px"; // Adjust the margin left when sidebar is closed
        });
    } else {
        faqAnswers.forEach(function(answer) {
            answer.style.marginLeft = "290px"; // Adjust the margin left when sidebar is open
        });
    }
}


adjustAnswerPosition();
toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close")
    rightPartition.classList.toggle("right-partition-close")
})
searchBar.addEventListener("click", () => {
    sidebar.classList.remove("close")
    rightPartition.classList.remove("right-partition-close")
    adjustAnswerPosition();
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




