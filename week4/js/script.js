const form = document.querySelector("#loginForm");

form.addEventListener("submit", function (event) {

    let valid = showError(); 

    if (!valid) {
        event.preventDefault(); 
    }

});

function showError() {
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");

    const emailError = document.querySelector("#span-email");
    const passwordError = document.querySelector("#span-password");

    let isValid = true;

    // Email validation
    if (!email.validity.valid || email.value.trim() === "") {
        emailError.textContent = "Enter a valid email address";
        emailError.classList.add("active");
        isValid = false;
    } else {
        emailError.textContent = "";
        emailError.classList.remove("active");
    }

    // Password validation
    if (!password.validity.valid || password.value.trim() === "") {
        passwordError.textContent = "Password cannot be empty";
        passwordError.classList.add("active");
        isValid = false;
    } else {
        passwordError.textContent = "";
        passwordError.classList.remove("active");
    }

    // If valid, proceed
    if (isValid) {
        console.log("Form is valid. Ready to submit.");
        
    }
       return isValid;
}

/* DOM Manipulation*/

function toggleSection() {
    let msg = document.getElementById("message");

    if (msg.style.display === "none") {
        msg.style.display = "block";
    } else {
        msg.style.display = "none";
    }
}