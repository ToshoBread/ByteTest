let viewMode = document.querySelector(".viewMode");
let editMode = document.querySelector(".editMode");
let editButton = document.querySelector(".editBtn");
let saveButton = document.querySelector(".save");
let cancelButton = document.querySelector(".cancel");

editButton.addEventListener("click", toggleHidden);
saveButton.addEventListener("click", toggleHidden);
cancelButton.addEventListener("click", toggleHidden);

function toggleHidden() {
	viewMode.classList.toggle("hidden");
	editMode.classList.toggle("hidden");
}
