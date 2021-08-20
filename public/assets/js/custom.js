// const { cleanData } = require("jquery");

// read more toggle
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

function infoToggle(id, infoId,text) {
    const info = document.getElementById(id);
    const infoIdFixed = document.getElementById(infoId);
    let btnText = document.getElementById(text);
    info.classList.toggle("d-none");
    infoIdFixed.classList.toggle("d-none");

    if(btnText.innerText === 'Edit'){
        btnText.innerText = 'Back'
    }else{
        btnText.innerText = 'Edit'
    }
}

function buttonToggle() {
    const dot = document.getElementById("dot");
    dot.classList.toggle("active");
}

function filterToggle(id, icon) {
    const element = document.getElementById(id);
    const iconElement = document.getElementById(icon);
    element.classList.toggle("active");
    iconElement.classList.toggle("active");
}

// property filter toggle

function propertyTagToggle(btnId, dataId) {
    const button = document.getElementById(btnId);
    const data = document.getElementById(dataId);
    data.classList.remove("d-none");
    button.classList.add("d-none");
}

// hover effect toggle

// function hoverToggle(e){
//     console.log(e);
// }

const element = document.getElementById('propertyType');

element.addEventListener('click', (e) => {
    const element = e.target;
    if(element.id){
        element.classList.toggle('active')
    }else{
        element.parentNode.classList.toggle('active')
    }
})
