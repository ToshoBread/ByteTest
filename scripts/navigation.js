const dropdownButton = document.querySelector(".dropdown-btn");
const dropdownContent = document.querySelector(".dropdown-content");
const caret = document.querySelector(".fa");
dropdownContent.style.display = "none";

const sidebarButton = document.querySelector(".sidebar-btn");
const sidebar = document.querySelector(".sidebar");
const menuIcon = sidebarButton.querySelector("i");

let sidebarBigDisplay = "20%";
let sidebarSmallDisplay = "100%";
let tabletMediaQuery = window.matchMedia("(max-width: 768px)");

// !---------------------------------------actions---------------------------------------
sidebarButton.addEventListener("click", toggleSidebar);
tabletMediaQuery.addEventListener("change", autoSidebarResize);

dropdownButton.addEventListener("click", toggleDropdown);
window.addEventListener("click", closeIfClickedOutside);

// !---------------------------------------functions---------------------------------------
function toggleDropdown() {
	dropdownContent.style.display =
		dropdownContent.style.display === "none" ? "block" : "none";

	caret.classList.toggle("fa-caret-down");
	caret.classList.toggle("fa-caret-up");
}

function closeIfClickedOutside(event) {
	if (dropdownContent.style.display === "none") return;
	if (
		!event.target.matches(".dropdown-btn") &&
		!event.target.closest(".dropdown-btn-wrapper")
	) {
		dropdownContent.style.display = "none";
	}
}

function toggleSidebar() {
	const sidebarIsOpen = sidebar.style.width !== "";

	if (tabletMediaQuery.matches) {
		sidebar.style.width = sidebarIsOpen ? "" : sidebarSmallDisplay;
	} else {
		sidebar.style.width = sidebarIsOpen ? "" : sidebarBigDisplay;
	}

	menuIcon.classList.toggle("fa-bars", sidebarIsOpen);
	menuIcon.classList.toggle("fa-times", !sidebarIsOpen);
}

function autoSidebarResize() {
	if (sidebar.style.width === "") return;
	if (tabletMediaQuery.matches) {
		sidebar.style.width = sidebarSmallDisplay;
	} else sidebar.style.width = sidebarBigDisplay;
}
