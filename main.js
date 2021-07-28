const modal = document.querySelector(".modal");
const trigger = document.querySelector(".trigger");
const closeButton = document.querySelector(".close-button");
const cancelButton = document.querySelector("#cancel");

function toggleModal(event) {
    modal.classList.toggle("show-modal");
    if (event.target === closeButton) {
        location.reload();
    }
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);

closeButton.addEventListener("click", toggleModal);

cancelButton.addEventListener("click", toggleModal);

window.addEventListener("click", windowOnClick);