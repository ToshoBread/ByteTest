<style>
	header {
		height: 10%;
		width: 100%;
		background: var(--topNavBackgroundColor);
		box-shadow: 0 0 1rem 0.1rem var(--shadowColor);
		position: sticky;
		top: 0;
		display: flex;
		align-items: center;
		justify-content: flex-end;
		z-index: 1;
	}

	header .btn {
		background: transparent;
		border: none;
		color: var(--buttonColor);
		scale: 2;
		margin: 0 2rem;
	}

	header .btn:hover {
		cursor: pointer;
	}

	header .fa-caret-down {
		scale: 0.5;
	}

	header .sidebarBtn {
		margin-right: auto;
	}

	.dropdownBtnWrapper {
		height: 100%;
		overflow: hidden;
	}

	.dropdownBtnWrapper .dropdownBtn {
		display: flex;
		align-items: center;
		height: 100%;
	}

	.dropdownContent {
		display: none;
		position: absolute;
		width: 15rem;
		right: 0;
		z-index: 1;
		background-color: var(--dropdownBackgroundColor);
		box-shadow: 0 0.5rem 1rem 0.1rem var(--shadowColor);
	}

	.dropdownContent a {
		display: block;
		color: var(--buttonColor);
		text-align: center;
		padding: 10%;
		transition: background-color 0.15s ease-in;
	}

	.dropdownContent a:hover {
		background-color: var(--topNavBackgroundColor);
	}

	.dropdownContent i {
		float: left;
	}

	.dropdownContent hr {
		margin: 0 5%;
	}

	nav {
		height: 90vh;
		width: 0%;
		position: fixed;
		z-index: 1;
		top: 10vh;
		left: 0;
		background-color: var(--sidebarBackgroundColor);
		overflow-x: hidden;
		box-shadow: 0 0.5rem 1rem 0.1rem var(--shadowColor);
	}

	nav a {
		display: block;
		color: var(--buttonColor);
		padding: 10%;
		transition: background-color 0.15s ease-in;
	}

	nav a:hover {
		background-color: var(--sidebarButtonHoverColor);
	}

	nav i {
		padding-right: 10%;
		scale: 1.5;
	}

	nav hr {
		margin: 0 5%;
	}

	nav img {
		width: 75%;
		margin: 10% 12%;
	}

	@media only screen and (max-width: 768px) {
		.dropdownContent {
			width: 100%;
		}

		nav a,
		.dropdownContent a {
			text-align: center;
			padding: 5%;
		}

		nav i,
		.dropdownContent i {
			padding-right: 5%;
			scale: 2;
		}

		nav hr,
		.dropdownContent hr {
			margin: 0 3%;
		}
	}
</style>

<header>
	<button type="button" class="btn sidebarBtn">
		<i class="fa-solid fa-bars"></i>
	</button>
	<button type="button" class="btn notifyBtn">
		<i class="fa-regular fa-bell"></i>
	</button>
	<div class="dropdownBtnWrapper">
		<button type="button" class="btn dropdownBtn">
			<?= '<?xml version="1.0" encoding="UTF-8"?>'; ?>
			<svg
				width="20px"
				height="20px"
				stroke-width="1.5"
				viewBox="0 0 24 24"
				fill="none"
				xmlns="http://www.w3.org/2000/svg"
				color="#FFFFFF">
				<path
					d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z"
					stroke="#FFFFFF"
					stroke-width="1.5"
					stroke-linecap="round"
					stroke-linejoin="round"></path>
				<path
					d="M4.271 18.3457C4.271 18.3457 6.50002 15.5 12 15.5C17.5 15.5 19.7291 18.3457 19.7291 18.3457"
					stroke="#FFFFFF"
					stroke-width="1.5"
					stroke-linecap="round"
					stroke-linejoin="round"></path>
				<path
					d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
					stroke="#FFFFFF"
					stroke-width="1.5"
					stroke-linecap="round"
					stroke-linejoin="round"></path>
			</svg>
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdownContent">
			<a href="dashboard.php">
				<i class="fa-solid fa-user-group"></i>View Profile
			</a>
			<hr />
			<a href="accountSettings.php">
				<i class="fa-solid fa-gear"></i>Account Settings
			</a>
			<hr />
			<a href="userSupport.php">
				<i class="fa-solid fa-headset"></i>Help & Support
			</a>
			<hr />
			<a href="login.php">
				<i class="fa-solid fa-right-from-bracket"></i>Log Out
			</a>
		</div>
	</div>
</header>
<nav class="sidebar">
	<img src="../imgs/logoLongWhite.png" alt="ByteTestLogo" />
	<hr />
	<a href="index.php"><i class="fa-solid fa-house"></i>Home</a>
	<a href="practice.php"> <i class="fa-solid fa-pen-to-square"></i>Practice </a>
	<a href="playground.php">
		<i class="fa-solid fa-cubes-stacked"></i>Playground
	</a>
</nav>
<script>
	const dropdownButton = document.querySelector(".dropdownBtn");
	const dropdownContent = document.querySelector(".dropdownContent");
	dropdownContent.style.display = "none";

	const sidebarButton = document.querySelector(".sidebarBtn");
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
	}

	function closeIfClickedOutside(event) {
		if (dropdownContent.style.display === "none") return;
		if (
			!event.target.matches(".dropdownBtn") &&
			!event.target.closest(".dropdownBtnWrapper")
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
</script>