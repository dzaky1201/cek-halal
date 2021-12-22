const closebutton = document.getElementById("closebutton");
const modal = document.getElementById("modal");

closebutton.addEventListener("click", () =>
    modal.classList.remove("scale-100")
);

window.onclick = function (event) {
    if (event.target.classList.contains("delete-button")) {
        modal.classList.add("scale-100");
    }
};
