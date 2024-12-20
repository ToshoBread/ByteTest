<link rel="stylesheet" href="../styles/navigation.css?version=<?php echo time(); ?>" />
<header>
	<button type="button" class="btn sidebar-btn">
		<i class="fa-solid fa-bars"></i>
	</button>
	<button type="button" class="btn notify-btn">
		<i class="fa-regular fa-bell"></i>
	</button>
	<div class="dropdown-btn-wrapper">
		<button type="button" class="btn dropdown-btn">
			<?= '<?xml version="1.0" encoding="UTF-8"?>'; ?>
			<svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
				xmlns="http://www.w3.org/2000/svg" color="#FFFFFF">
				<path
					d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2Z"
					stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				<path d="M4.271 18.3457C4.271 18.3457 6.50002 15.5 12 15.5C17.5 15.5 19.7291 18.3457 19.7291 18.3457"
					stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
				<path
					d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z"
					stroke="#FFFFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
			<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="profile.php">
				<i class="fa-solid fa-user-group"></i>View Profile
			</a>
			<hr />
			<a href="settings.php">
				<i class="fa-solid fa-gear"></i>Account Settings
			</a>
			<hr />
			<a href="support.php">
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
	<a href="home.php"><i class="fa-solid fa-house"></i>Home</a>
	<a href="practice.php"> <i class="fa-solid fa-pen-to-square"></i>Practice </a>
	<a href="playground.php">
		<i class="fa-solid fa-cubes-stacked"></i>Playground
	</a>
</nav>
<script src="../scripts/navigation.js?version=<?php echo time(); ?>"></script>