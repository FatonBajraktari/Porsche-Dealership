function validation(){
    var name = document.getElementById('name');
    var surname = document.getElementById('surname');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var password = document.getElementById('confirm');

    var nameError = document.getElementById('nameError');
    var surnameError = document.getElementById('surnameError');
    var emailError = document.getElementById('emailError');
    var passwordError = document.getElementById('passwordError');
    var confirmError = document.getElementById('confirmError');




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

    var passwordRegex = /^[A-Z][a-z]+(\d{5})$/;
    if(!passwordRegex.test(password.value)){
        passwordError.innerText = "Enter a password"
        return;
    }

    
    var confirmRegex = /^[A-Z][a-z]+(\d{5})$/;
    if(confirmRegex==passwordRegex){
        return;
    }

    alert("Jeni regjistruar me sukses")
}
