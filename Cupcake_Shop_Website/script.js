/*
    Name: Ahmed Ounissi
    Date: 2022-07-30
    javascript file
*/

function clearErrors() {
    document.getElementById("emailError").textContent = '';
    document.getElementById("passwordError").textContent = '';
    document.getElementById("passwordError2").textContent = '';
    form.email.style.backgroundColor = "White";
    form.pass.style.backgroundColor = "White";
    form.pass2.style.backgroundColor = "White";
}

function validate() {
    var filter = /\S+@\S+\.\S+/;
    var valid = true;

    if (!(form.email.value.match(filter))) {
        document.getElementById("emailError").textContent = 'Wrong email';
        form.email.style.backgroundColor = "Orange";
        valid = false;
    }

    if (!(form.pass.value.match(/[a-z]/g) && form.pass.value.match(/[A-Z]/g))) {
        document.getElementById("passwordError").textContent = 'Needs at least 1 uppercase letter and 1 undercase';
        form.pass.style.backgroundColor = "Orange";
        valid = false;
    }

    if (form.pass.value.length <= 5) {
        document.getElementById("passwordError").textContent = 'At least 6 characters';
        form.pass.style.backgroundColor = "Orange";
        valid = false;
    }

    if (form.pass2.value != form.pass.value) {
        document.getElementById("passwordError2").textContent = 'Passwords are not the same';
        form.pass2.style.backgroundColor = "Orange";
        valid = false;
    }

    if (form.pass2.value === "") {
        document.getElementById("passwordError2").textContent = 'Re-type password';
        form.pass2.style.backgroundColor = "Orange";
        valid = false;
    }

    if (!valid) {
        // Prevents the form from being submitted/sent by canceling the event
        event.preventDefault();
    }
    else {

        return true;
    }
}

