// modal function
if (
    document.title == "Dashboard Admin" ||
    document.title == "Dashboard Super Admin" ||
    document.title == "Halaman Login Admin"
) {
    const button = document.getElementById("buttonmodal");
    const closebutton = document.getElementById("closebutton");
    const modal = document.getElementById("modal");

    closebutton.addEventListener("click", () =>
        modal.classList.remove("scale-100")
    );

    button.addEventListener("click", () => modal.classList.add("scale-100"));
}

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

if (document.title == "Search Halal Products") {
    console.log(true);
    let filters = document.querySelectorAll(".filterBtn");
    window.onclick = function (event) {
        if (!event.target.classList.contains("bg-primary-100")) {
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
