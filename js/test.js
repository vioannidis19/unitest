let submitBtn = document.querySelector("#test-submit-btn");

let addEventListeners = () => {
    submitBtn.addEventListener("click", showGrade, false);
}

let showGrade = () => {
    let str = "Ο βαθμός είναι :" + Math.floor((Math.random() * 10) + 1); 
    alert(str);
}

window.onload = addEventListeners;