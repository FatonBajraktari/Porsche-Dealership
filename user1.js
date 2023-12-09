function openMenu() {
    document.getElementById("sideMenu").style.width = "250px";
}

function closeMenu() {
    document.getElementById("sideMenu").style.width = "0";
}

function validation(){
    var name = document.getElementById('name');
    var surname = document.getElementById('surname');
    var email = document.getElementById('email');
    var password = document.getElementById('password');

    var nameError = document.getElementById('nameError');
    var surnameError = document.getElementById('surnameError');
    var emailError = document.getElementById('emailError');
    var passwordError = document.getElementById('passwordError');




    var nameRegex = /^[A-Z][a-z]+$/;
    if(!nameRegex.test(name.value)){
        nameError.innerText="Enter a valid name"
        return;
    }

    var surnameRegex = /^[A-Z][a-z]+$/;
    if(!surnameRegex.test(surname.value)){
        surnameError.innerText = "Please enter a valid surname"
        return;
    }

    var emailRegex = /^[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;
    if(!emailRegex.test(email.value)){
        emailError.innerText = "Enter a valid email";
        return;
    }

    // var passwordRegex = /^[A-Z][a-z]+(\d{3})$/;
    // if(!passwordRegex.test(password.value)){
    //     passwordError.innerText = "Enter a password"
    //     return;
    // }


    // var confirmRegex = /^[A-Z][a-z]+(\d{3})$/;
    // if(!passwordRegex.test(password.value)==confirmRegex.test(confirm.value)){
    //     confirmError.innerText = "Passwords don't match"
    //     return;
    // }

    var passwordRegex = /^[A-Z][a-z]+(\d{3})$/;
if (!passwordRegex.test(password.value)) {
    passwordError.innerText = "Enter a valid password";
    return;
}

var confirmRegex = /^[A-Z][a-z]+(\d{3})$/;
if (password.value !== confirm.value || !confirmRegex.test(confirm.value)) {
    confirmError.innerText = "Passwords don't match";
    return;
}

    alert("You have been succesfully registered")

}




