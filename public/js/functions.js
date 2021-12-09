function showPassword() {
    let password = document.getElementById("passwordInput");
    let eye = document.getElementById("eye");
    let eye_closed = document.getElementById("eye-closed");

    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
    eye_closed.classList.toggle("hidden");
    eye.classList.toggle("hidden");
}
function isHalal(value) {
    let certificationNumberInput = document.querySelector("#cert_number");
    let expDateInput = document.querySelector("#exp_date");
    if (value === "true") {
        certificationNumberInput.classList.remove("hidden");
        expDateInput.classList.remove("hidden");
    } else if (!expDateInput.classList.contains("hidden")) {
        certificationNumberInput.classList.add("hidden");
        expDateInput.classList.add("hidden");
    }
}
