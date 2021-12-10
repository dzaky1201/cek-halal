// modal function
const button = document.getElementById("buttonmodal");
const closebutton = document.getElementById("closebutton");
const modal = document.getElementById("modal");

button.addEventListener("click", () => modal.classList.add("scale-100"));
closebutton.addEventListener("click", () =>
    modal.classList.remove("scale-100")
);

//
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

// Toggle logout button

function toggleLogout() {
    document.getElementById("dropdown-content").classList.toggle("hidden");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches("#logout")) {
        let dropdown = document.getElementById("dropdown-content");
        if (dropdown.classList.contains("show")) {
            dropdown.classList.remove("show");
        }
    }
};
