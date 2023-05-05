// document.querySelector() is used to select an element from the document using its ID
let captchaText = document.querySelector('#captcha');
var ctx = captchaText.getContext("2d");
ctx.font = "30px Roboto";
ctx.fillStyle = "#08e5ff";


let userText = document.querySelector('#textBox');
let submitButton = document.querySelector('#submitButton');
let output = document.querySelector('#output');
let refreshButton = document.querySelector('#refreshButton');


// alphaNums contains the characters with which you want to create the CAPTCHA
let alphaNums = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
let emptyArr = [];

// This loop generates a random string of 7 characters using alphaNums
// Further this string is displayed as a CAPTCHA
for (let i = 1; i <= 7; i++) {
    emptyArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
}
var c = emptyArr.join('');
ctx.fillText(emptyArr.join(''),captchaText.width/4, captchaText.height/2);


// This event listener is stimulated whenever the user press the "Enter" button
// "Correct!" or "Incorrect, please try again" message is
// displayed after validating the input text with CAPTCHA
userText.addEventListener('keyup', function(e) {
	// Key Code Value of "Enter" Button is 13
    if (e.keyCode === 13) {
        if (userText.value === c) {
            output.classList.add("correctCaptcha");
            output.innerHTML = "Correct!";
        } else {
            output.classList.add("incorrectCaptcha");
            output.innerHTML = "Incorrect, please try again";
        }
    }
});

// This event listener is stimulated whenever the user clicks the "Submit" button
// "Correct!" or "Incorrect, please try again" message is
// displayed after validating the input text with CAPTCHA
submitButton.addEventListener('click', function() {
    if (userText.value === c) {
        output.classList.add("correctCaptcha");
        output.innerHTML = "Correct!";
    } else {
        output.classList.add("incorrectCaptcha");
        output.innerHTML = "Incorrect, please try again";
    }
});

// This event listener is stimulated whenever the user press the "Refresh" button
// A new random CAPTCHA is generated and displayed after the user clicks the "Refresh" button
refreshButton.addEventListener('click', function() {
    userText.value = "";
    let refreshArr = [];
    for (let j = 1; j <= 7; j++) {
        refreshArr.push(alphaNums[Math.floor(Math.random() * alphaNums.length)]);
    }
    ctx.clearRect(0, 0, captchaText.width, captchaText.height);
    c = refreshArr.join('');
    ctx.fillText(refreshArr.join(''),captchaText.width/4, captchaText.height/2);
    output.innerHTML = "";
});

document.getElementById("form").addEventListener("submit",
function (e) { let errors = true;

    if(userText.value === c){
    }else{errors=false;alert("problem captcha");}
    if (errors === false) {alert("problem");
    e.preventDefault();
} else {
    alert("formulaire envoyé");
}
return errors;
});

let lReferenceError = document.getElementById("reference");
var numbers = /^[0-9]+$/; 

function referenceValidation() {
    if (lReferenceError.value.length < 2) {
        lReferenceError = " Le reference doit compter au minimum 2 nombres.";
        document.getElementById("referenceEr").innerHTML = lReferenceError;
        return false;

    }
    if (!lNameInput.value.match(letters)) {
        lReferenceError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
        lReferenceValid2 = false;
        document.getElementById("referenceEr").innerHTML = lReferenceError2;
        return false;
    }
    document.getElementById("referenceEr").innerHTML =
        "<p style='color:green'> Correct </p>";

    return true;
}

document.getElementById("email").addEventListener ('input',function(){
    var email = document.getElementById("email").value;
    var text = document.getElementById("text");
    var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; // C'est dans la description 

    if (email.match(pattern)) {
        text.innerHTML ="Votre addresse Mail est valide";
        text.style.color ="#00ff00"
    }else {
        text.innerHTML ="Votre addresse Mail est invalide";
        text.style.color ="red"
    }
    if (email == "") {
        text.innerHTML ="";
        text.style.color ="red"
    }

 }) 

document.forms["ajout"].addEventListener("submit", function (e) {
    var inputs = document.forms["ajout"];
    let ids = [
        "erreur",
        "referenceEr",
        "mailEr",
        "cPassEr",
        "erreur",
    ];



    //ids.map((id) => (document.getElementById(id).innerHTML = "")); // reinitialiser l'affichage des erreurs

    let errors = false;

    //Traitement cas par cas
    if (lreferenceInput.value.length < 2) {
        errors = false;
        document.getElementById("referenceEr").innerHTML =
            "Le nom doit compter au minimum 2 nombres.";
    } else if (!lReferenceInput.value.match(letters)) {
        errors = false;
        document.getElementById("referenceEr").innerHTML =
            "Veuillez entrer un reference valid ! (seulement des lettres)";
    } else {
        errors = true;
    }
    

    
    if (
        !(
            passInput.value.match(/[0-9]/g) &&
            passInput.value.match(/[A-Z]/g) &&
            passInput.value.match(/[a-z]/g) &&
            passInput.value.length >= 10
        )
    ) {
        errors = false;
        document.getElementById("passEr").innerHTML = "Mot de passe faible";
    } else {
        errors = true;
    }

    if (passInput.value != cPassInput.value) {
        errors = false;
        document.getElementById("cPassEr").innerHTML =
            "Les mots de passe ne correspondent pas";
    } else {
        errors = true;
    }

    //Traitement générique
    for (var i = 0; i < inputs.length; i++) {
        if (!inputs[i].value) {
            errors = false;
            document.getElementById("erreur").innerHTML =
                "Veuillez renseigner tous les champs";
        }
    }
    

    if (errors === false) {
        e.preventDefault();
    } else {
        alert("formulaire envoyé");
    }
});

