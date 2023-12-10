function openMenu() {
    document.getElementById("sideMenu").style.width = "250px";
}

function closeMenu() {
    document.getElementById("sideMenu").style.width = "0";
}


function validation(){

    var email = document.getElementById('email');
    var password = document.getElementById('password');

    var emailError = document.getElementById('emailError');
    var passwordError = document.getElementById('passwordError');


var emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    if(!emailRegex.test(email.value)){
        emailError.innerText = "Enter a valid email";
        event.preventDefault();
        return;
    }
    emailError.innerText = ""

    var passwordRegex = /^[A-Z][a-z]+(\d{3})$/;
if (!passwordRegex.test(password.value)) {
    passwordError.innerText = "Incorrect password. Please check your password and try again.";
    event.preventDefault();
    return;
}

alert("Login successful. Happy to see you again!")
}
document.getElementById('loginForm'). addEventListener('submit', validation);