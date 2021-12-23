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
    const certificationNumberInput = document.querySelector("#cert_number");
    const expDateInput = document.querySelector("#exp_date");
    console.log(value);
    if (value === "halal_true") {
        certificationNumberInput.classList.remove("hidden");
        expDateInput.classList.remove("hidden");
    } else {
        certificationNumberInput.classList.add("hidden");
        expDateInput.classList.add("hidden");
    }
}

if (document.title == "Search Halal Products") {
    console.log(true);
    let filters = document.querySelectorAll(".filterBtn");
    window.onclick = function (event) {
        if (event.target.classList.contains("filterBtn")) {
            filters.forEach((filter) => {
                // remove current active color
                if (filter.classList.contains("bg-primary-100")) {
                    filter.classList.remove("bg-primary-100");
                    filter.classList.add("bg-gray-secondary");
                }
            });
            event.target.classList.remove("bg-gray-secondary");
            event.target.classList.add("bg-primary-100");
        }
    };
}
