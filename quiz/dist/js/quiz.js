window.onload = function () {
    this.show(0);
}



let questions = [
    {
        id: 1,
        question: "What is your name?",
        answer: "Sourav Debnath",
        options: [
            "Sagar Debnath",
            "Sourav Debnath",
            "Mousumi Debnath",
            "None of this"
        ]
    },
    {
        id: 2,
        question: "What is your age?",
        answer: "21",
        options: [
            "21",
            "16",
            "18",
            "26"
        ]
    },
    {
        id: 3,
        question: "What do you in your class?",
        answer: "B.tech(4th year)",
        options: [
            "B.tech(4th year)",
            "B.tech(1st year)",
            "B.tech(2nd year)",
            "B.tech(3rd year)"
        ]
    }


];

function submitForm(e) {
    e.preventDefault();
    let name = document.forms["welcome_form"]["name"].value;
    sessionStorage.setItem("name", name);
    location.href = "quiz.html";

}

let question_count = 0;
let point = 0;
function next() {
    let user_answer = document.querySelector("li.option.active").innerHTML;

    if (user_answer == questions[question_count].answer) {
        point += 10;
        sessionStorage.setItem("points", point);
    }
    else{
        point += 0;
        sessionStorage.setItem("points",point);
    }

    if(question_count == questions.length - 1){
        sessionStorage.setItem("time", `${minutes} minutes and ${seconds} seconds`);
        clearInterval(mytime);
        location.href = "end.html";
        return;
    }
    // let user_answer = document.querySelector("li.option.active").innerHTML;
    // if (user_answer == questions[question_count].answer) {
    //     point += 10;
    //     sessionStorage.setItem("points", point);
    // }
    question_count++;
    show(question_count);


}

function show(count) {
    let question = document.getElementById("questions");
    // question.innerHTML = "<h2>" + questions[count].question + "<h2>";
    question.innerHTML = `<h2>Q${question_count+1}. ${questions[count].question}</h2>
    <ul class="option_group">
                        <li class="option">${questions[count].options[0]}</li>
                        <li class="option">${questions[count].options[1]}</li>
                        <li class="option">${questions[count].options[2]}</li>
                        <li class="option">${questions[count].options[3]}</li>
                    </ul>
    `;
    toggleActive()

}

function toggleActive() {
    let option = document.querySelectorAll("li.option");
    for (let i = 0; i < option.length; i++) {
        option[i].onclick = function () {
            for (let j = 0; j < option.length; j++) {
                if (option[j].classList.contains("active")) {
                    option[j].classList.remove("active");
                }
            }
            option[i].classList.add("active");
        }
    }
}