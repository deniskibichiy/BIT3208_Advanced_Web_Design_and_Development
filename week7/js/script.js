// script.js

function showError(form) {

    const name = form.querySelector("input[name='name']");
    const email = form.querySelector("#email");
    const phone = form.querySelector("input[name='phone']");
    const password = form.querySelector("#password");
    const confirm = form.querySelector("input[name='confirm_password']");

    const emailError = form.querySelector("#span-email");
    const passwordError = form.querySelector("#span-password");
    const confirm_password_error = form.querySelector("#confirm-password-error")

    let isValid = true;

    // 
    if (name) {
        if (name.value.trim() === "") {
            name.style.border = "1px solid red";
            isValid = false;
        } else {
            name.style.border = "1px solid green";
        }
    }

    // EMAIL
    if (email) {
        if (!email.value.trim() || !email.validity.valid) {
            if (emailError) emailError.textContent = "Enter a valid email address";
            email.style.border = "1px solid red";
            isValid = false;
        } else {
            if (emailError) emailError.textContent = "";
            email.style.border = "1px solid green";
        }
    }

    // PHONE 
    if (phone) {
        if (phone.value.trim().length < 10) {
            phone.style.border = "1px solid red";
            isValid = false;
        } else {
            phone.style.border = "1px solid green";
        }
    }

    // PASSWORD
    if (password) {
        if (password.value.trim().length < 6) {
            if (passwordError) passwordError.textContent = "Password must be at least 6 characters";
            password.style.border = "1px solid red";
            isValid = false;
        } else {
            if (passwordError) passwordError.textContent = "";
            password.style.border = "1px solid green";
        }
    }

    // CONFIRM PASSWORD
    if (confirm && password) {
        if (confirm.value !== password.value || confirm.value.trim() === "") {
            confirm.style.border = "1px solid red";
            confirm_password_error.textContent = "Passwords must match";
            confirm_password_error.style.color = "red";
            isValid = false;
        } else {
            confirm.style.border = "1px solid green";
        }
    }

    return isValid;
}


// SUBMIT HANDLER
const form = document.querySelector("#loginForm, #signupForm");

if (form) {
    form.addEventListener("submit", function (event) {

        const valid = showError(form);

        if (!valid) {
            event.preventDefault();
        }
    });
}
