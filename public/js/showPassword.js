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
