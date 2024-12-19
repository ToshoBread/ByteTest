<?php
require "../components/components.php";
require "../src/settings_Content.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../styles/base.css?version=<?= time(); ?>" />
	<link rel="stylesheet" href="../styles/settings.css?version=<?= time(); ?>" />
	<link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
	<title>ByteTest</title>
</head>

<body>
	<?= renderComponent(new NavigationComponent()); ?>
	<div class="mainWrapper">
		<main>
			<?= renderComponent(new OuterCardComponent(
				renderComponent(new InnerCardComponent(
					"
			<div class='view-mode'>
				<div class='pic-mask'>
					<img src='{$profilePicture}' />
				</div>
					<div class='wrapper user'>
					<h1>{$username}</h1>
					<p>Member since: {$regDate}</p>
					<p>Last seen: {$lastSeen}</p>
				</div>
				<button type='button' class='edit-btn'>Edit User Profile</button>
				<h2>Information</h2>
				<div class='wrapper email'>
					<h4>Email</h4>
					<h3>{$email}</h3>
				</div>
				<div class='wrapper full-name'>
					<h4>Name</h4>
					<h3>{$fullName}</h3>
				</div>
				<div class='wrapper phone'>
					<h4>Phone Number</h4>
					<h3>{$phone}</h3>
				</div>
				<div class='wrapper org'>
					<h4>Organization</h4>
					<h3>{$org}</h3>
				</div>
				<div class='wrapper skills'>
					<h4>Skills <span>(Comma separated)</span></h4>
					<h3>{$skills}</h3>
				</div>
				<div class='wrapper exp-level'>
					<h4>Development Experience</h4>
					<h3>{$expLevel}</h3>
				</div>
			</div>

			<form class='edit-mode hidden' method='post'>
				<div class='pic-mask'>
					<img src='{$profilePicture}' />
					<div class='pic-overlay'>Change Photo</div>
				</div>
				<div class='wrapper user'>
					<input type='text' id='username' class='username' placeholder='{$username}' />
					<p>Member since: {$regDate}</p>
					<p>Last seen: {$lastSeen}</p>
				</div>
				<button type='button' class='save-btn'>Save Changes</button>
				<button type='button' class='cancel-btn'>Cancel</button>
				<h2>Information</h2>
				<div class='wrapper email'>
					<h4><label for='email'>Email</label></h4>
					<input type='email' name='email' id='email' class='email' placeholder='{$email}' />
				</div>
				<div class='wrapper first-name'>
					<h4><label for='first-name'>First Name</label></h4>
					<input type='text' name='first-name' id='first-name' class='first-name' placeholder='{$firstName}' />
				</div>
				<div class='wrapper last-name'>
					<h4><label for='last-name'>Last Name</label></h4>
					<input type='text' name='last-name' id='last-name' class='last-name' placeholder='{$lastName}' />
				</div>
				<div class='wrapper phone'>
					<h4><label for='phone'>Phone Number</label></h4>
					<input type='tel' name='phone' id='phone' class='phone' placeholder='{$phone}' />
				</div>
				<div class='wrapper org'>
					<h4><label for='org'>Organization</label></h4>
					<input type='text' name='org' id='org' class='org' placeholder='{$org}' />
				</div>
				<div class='wrapper skills'>
					<h4><label for='skills'>Skills (Comma separated)</label></h4>
					<input type='text' name='skills' id='skills' class='skills' placeholder='{$skills}' />
				</div>
				<div class='wrapper exp-level'>
					<h4>Development Experience:</h4>
					<h3>{$expLevel}</h3>
				</div>
			</form>
		"
				))
			)); ?>
		</main>
		<?= renderComponent(new FooterComponent); ?>
	</div>
</body>
<script src="../scripts/settings.js?version=<?= time(); ?>"></script>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>