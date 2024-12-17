let viewMode = document.querySelector(".view-mode");
let editMode = document.querySelector(".edit-mode");
let editButton = document.querySelector(".edit-btn");
let saveButton = document.querySelector(".save-btn");
let cancelButton = document.querySelector(".cancel-btn");

editButton.addEventListener("click", toggleHidden);
saveButton.addEventListener("click", toggleHidden);
cancelButton.addEventListener("click", toggleHidden);

function toggleHidden() {
	viewMode.classList.toggle("hidden");
	editMode.classList.toggle("hidden");
}
