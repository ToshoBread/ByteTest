<?php
$profilePicture = "../imgs/byteTestLogoWhite.png";
$username = "Placeholder";
$regDate = date("M Y");
$lastSeen = date("m-d-Y");
$email = "placeholder@email.com";
$firstName = "Hello";
$lastName = "World";
$fullName = $firstName . " " . $lastName;
$org = "None";
$phone = "099230923";
$skills = "Java, Python, PHP";
$expLevel = "Intermediate";

$settings_OuterCardContent = renderComponent(new InnerCardComponent("
	<div class='viewMode'>
		<div class='picMask'>
			<img src='{$profilePicture}' class='profilePicture'/>
		</div>
			<div class='wrapper user'>
			<h1>{$username}</h1>
			<p>Member since: {$regDate}</p>
			<p>Last seen: {$lastSeen}</p>
		</div>
		<button type='button' class='editBtn'>Edit User Profile</button>
		<h2>Information</h2>
		<div class='wrapper email'>
			<h4>Email</h4>
			<h3>{$email}</h3>
		</div>
		<div class='wrapper fullName'>
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
		<div class='wrapper expLevel'>
			<h4>Development Experience</h4>
			<h3>{$expLevel}</h3>
		</div>
	</div>

	<form class='editMode hidden' method='post'>
		<div class='picMask'>
			<img src='{$profilePicture}' class='profilePicture'/>
			<div class='picOverlay'>Change Photo</div>
		</div>
		<div class='wrapper user'>
			<input type='text' id='username' class='username' placeholder='{$username}' />
			<p>Member since: {$regDate}</p>
			<p>Last seen: {$lastSeen}</p>
		</div>
		<button type='button' class='save'>Save Changes</button>
		<button type='button' class='cancel'>Cancel</button>
		<h2>Information</h2>
		<div class='wrapper email'>
			<h4><label for='email'>Email</label></h4>
			<input type='email' name='email' id='email' class='email' placeholder='{$email}' />
		</div>
		<div class='wrapper firstName'>
			<h4><label for='firstName'>First Name</label></h4>
			<input type='text' name='firstName' id='firstName' class='firstName' placeholder='{$firstName}' />
		</div>
		<div class='wrapper lastName'>
			<h4><label for='lastName'>Last Name</label></h4>
			<input type='text' name='lastName' id='lastName' class='lastName' placeholder='{$lastName}' />
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
		<div class='wrapper expLevel'>
			<h4>Development Experience:</h4>
			<h3>{$expLevel}</h3>
		</div>
	</form>
"));
?>