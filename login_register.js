function login() {
    var login = document.getElementById("login");
    var register = document.getElementById("register");
    var buttonDivInner = document.getElementById("button-div-inner");

    login.style.left = "50px";
    register.style.left = "450px";
    buttonDivInner.style.left = "0";
}

function register() {
    var login = document.getElementById("login");
    var register = document.getElementById("register");
    var buttonDivInner = document.getElementById("button-div-inner");

    login.style.left = "-400px";
    register.style.left = "50px";
    buttonDivInner.style.left = "110px";
}

function usernameLoginClick() {
    var usernameSpan = document.getElementById("un-span");

    usernameSpan.className = ("un-span-top");
}

function passwordLoginClick() {
    var passwordSpan = document.getElementById("pw-span");

    passwordSpan.className = ("pw-span-top");
}



//REGISTER FROM USERNAME, PASSWORD AND EMAIL INPUTS ANIMATION


function passwordRegisterClick() {
    var passwordRegisterSpan = document.getElementById("pw-span2");

    passwordRegisterSpan.className = ("pw-span2-top");
}


function usernameRegisterClick() {
    var usernameRegisterSpan = document.getElementById("un-span2");

    usernameRegisterSpan.className = ("un-span2-top");
}

function emailRegisterClick() {
    var emailRegisterSpan = document.getElementById("em-span2");

    emailRegisterSpan.className = ("em-span2-top");
}
