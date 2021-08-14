const { cleanData } = require("jquery");

function myFunction(id) {
    const dots = document.getElementById(`dots${id}`);
    const moreText = document.getElementById(`more${id}`);
    const btnText = document.getElementById(`myBtn${id}`);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}


function infoToggle(id,infoId){
    const info = document.getElementById(id);
    const infoIdFixed = document.getElementById(infoId);
    info.classList.toggle('d-none');
    infoIdFixed.classList.toggle('d-none')
}

function buttonToggle(){
    const dot = document.getElementById('dot');
    dot.classList.toggle('active')
}

function filterToggle(id,icon){
    const element = document.getElementById(id);
    const iconElement = document.getElementById(icon);
    element.classList.toggle('active')
    iconElement.classList.toggle('active')
}

