const quizData = [
    {
        question: "¿Como son mis apellidos?",
        a: "Pineres Aroyabe",
        b: "Piñerez Arroyave",
        c: "Pinerez Arroyaves",
        d: "Piñeres Arrollave",
        correct: "b",
    },
    {
        question: "¿Cual es mi color favorito?",
        a: "Morado",
        b: "Verde",
        c: "Azul",
        d: "Rosa",
        correct: "b",
    },
    {
        question: "¿Que pelicula fuimos a ver al cine?",
        a: "Spiderman no way home",
        b: "Batman Returns",
        c: "The Joker",
        d: "The Batman",
        correct: "d",
    },
    {
        question: "¿Que traicion es mas grande?",
        a: "La de judas",
        b: "Marilin",
        c: "Los Parceros",
        d: "No soy rencorosa",
        correct: "c",
    },
    {
        question: "¿Cual es mi caricatura favorita de mi infancia?",
        a: "Naruto",
        b: "Hora de aventura",
        c: "Dragon ball",
        d: "Un show mas",
        correct: "b",
    },
    {
        question: "¿Que me gusta mas?",
        a: "Las Papas",
        b: "Dormir",
        c: "Las Nalgas",
        d: "Todas las anteriores",
        correct: "d",
    },
    {
        question: "¿Que animal nos junto?",
        a: "Un Guepardo",
        b: "Una Ballena",
        c: "Un Gato",
        d: "Un Dinosaurio",
        correct: "c",
    },
    {
        question: "¿Si yo te quiero, tu...?",
        a: "Mas",
        b: "Tambien",
        c: "No me quieres",
        d: "Ya sabes que es la A Descarada",
        correct: "a",
    },


];

const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')


let currentQuiz = 0
let score = 0

loadQuiz()

function loadQuiz() {

    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}


submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
       if(answer === quizData[currentQuiz].correct) {
           score++
       }

       currentQuiz++

       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else if (score==quizData.length) {
           quiz.innerHTML = ` <h1>Eres mi perra :3</h1>
           <h2>Respondiste ${score}/${quizData.length} Preguntas Correctamente</h2>

           <button onclick="location.reload()">Reload</button>
           `
                      
       }
       else{
        quiz.innerHTML = ` <h1 style="color: FireBrick;">Definitivamente no me amas :')</h1>
        <h2>Respondiste ${score}/${quizData.length} Preguntas Correctamente</h2>

        <button onclick="location.reload()">Reload</button>
        `
       }
    }
})