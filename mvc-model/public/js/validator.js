function validateForm() {
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("password").value;
    var pw2 = document.getElementById("passwordconf").value;
    var name1 = document.getElementById("username").value;

    //check empty first name field  
    if (name1 == "") {
        document.getElementById("blankMsg").innerHTML = "**Fill the first name";
        return false;
    }

    //character data validation  
    if (!isNaN(name1)) {
        document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";
        return false;
    }

    //check empty password field  
    if (pw1 == "") {
        document.getElementById("message1").innerHTML = "**Fill the password please!";
        return false;
    }

    //check empty confirm password field  
    if (pw2 == "") {
        document.getElementById("message2").innerHTML = "**Enter the password please!";
        return false;
    }

    //minimum password length validation  
    if (pw1.length < 8) {
        document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";
        return false;
    }

    //maximum length of password validation  
    if (pw1.length > 15) {
        document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";
        return false;
    }

    if (pw1 != pw2) {
        document.getElementById("message2").innerHTML = "**Passwords are not same";
        return false;
    } else {
        return "";
    }
}

function validateUsername(event) {
    const control = event.currentTarget.parentElement;
    let value = event.currentTarget.value;
    let message;
    const regex = '^[a-zA-Z]+$';

    if (value.length < 1) {
        message = 'Benutzername darf nicht leer sein.';
        setInvalid(control, message);
    } else if (value.length < 5) {
        message = 'Benutzername muss min. 5 Zeichen lang sein.';
        setInvalid(control, message);
    } else if (!value.match(regex)) {
        message = 'Benutzername darf nur Buchstaben enthalten.';
        setInvalid(control, message);
    } else {
        setValid(control);
        updateSubmit(control.parentElement);
    }
}

function validatePassword(event) {
    const control = event.currentTarget.parentElement;
    let value = event.currentTarget.value;

    if (value.length < 1) {
        message = 'Passwort darf nicht leer sein.';
        setInvalid(control, message);
    } else if (value.length < 7) {
        message = 'Password muss min. 6 Zeichen lang sein.';
        setInvalid(control, message);
    } else {
        setValid(control);
        updateSubmit(control.parentElement);
    }
}

function updateSubmit(form) {
    const controls = form.querySelectorAll('.form-field');
    controls.forEach()
}

function setValid(element) {
    element.classList.add('valid');
    element.classList.remove('invalid')
}

function setInvalid(control, message) {
    control.classList.remove('valid');
    control.classList.add('invalid');
}
