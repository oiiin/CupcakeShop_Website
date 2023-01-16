//Add a submit event listener to the form to invoke the validateProfile() method when the form is submitted
document.form.addEventListener("submit", validate);

//Add a reset event listener to the form to invoke the resetProfile() method when the form is reset
document.form.addEventListener("reset", clearErrors);

//clear the warning
document.getElementById("email").addEventListener("blur", function () {
    if (this.value !== "") {

        document.getElementById("emailError").textContent = '';
        form.email.style.backgroundColor = "White";
    }
});

//clear the warning
document.getElementById("pass").addEventListener("blur", function () {
    if (this.value !== "") {

        document.getElementById("passwordError").textContent = '';
        form.pass.style.backgroundColor = "White";
    }
});

//clear the warning
document.getElementById("pass2").addEventListener("blur", function () {
    if (this.value !== "") {

        document.getElementById("passwordError2").textContent = '';
        form.pass2.style.backgroundColor = "White";
    }
});

