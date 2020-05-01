let saveTestSettingButton = document.querySelector("#save-test-settings");
let addQuestionIcon = document.querySelector("#add-question");

let addEventListeners = () => {
    //saveTestSettingButton.addEventListener("click", saveTestSettings, false);
    addQuestionIcon.addEventListener("click", addQuestions, false);
}

window.onload = addEventListeners;

let testInfo = {
    class: '',
    title: '',
    questions: 0,
    answers: 0
};

let saveTestSettings = () => {
    testInfo.class = document.querySelector("#class-select").value;
    testInfo.title = document.querySelector("#test-title").value;
    testInfo.questions = document.querySelector("#questions-quantity").value;
    testInfo.answers = document.querySelector('input[name="answer-quantity"]:checked').value;
    console.log(testInfo);
    
    document.querySelector(".test-creation-settings").classList.toggle("hide");
    storeSettings();
    addQuestions();
};

let storeSettings = () => {
    document.cookie = "class = " + testInfo.class;
    document.cookie = "title = " + testInfo.title; 
}

let addQuestions = () => {
    for (let i = 0; i < testInfo.questions; i++) {
        let containerDiv = document.createElement("div");
        let containerClass = document.createAttribute("class");
        containerClass.value = "question-field";
        containerDiv.setAttributeNode(containerClass);

        let questionInput = document.createElement("input");
        let questionPlaceholder = document.createAttribute("placeholder");
        questionPlaceholder.value = "Ερώτηση " + (i + 1);
        questionInput.setAttributeNode(questionPlaceholder);

        containerDiv.appendChild(questionInput);
        
        let answersDiv = document.createElement("div");
        for (let y = 0; y <testInfo.answers; y++) {
            let answerInput = document.createElement("input");
            let answerPlaceholder = document.createAttribute("placeholder");
            answerPlaceholder.value = "Απάντηση " + (y + 1);
            answerInput.setAttributeNode(answerPlaceholder);

            answersDiv.appendChild(answerInput);
        }       
        containerDiv.appendChild(answersDiv);
        document.querySelector(".test-creation-widget").appendChild(containerDiv);
    }
}
