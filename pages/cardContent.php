<?php

// !---------------------------------------Index Page---------------------------------------
$timeLimit = 200;
$examDescription = "
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione amet sit
	ab. Tempore corporis quasi ullam a voluptatibus quam, numquam recusandae et
	voluptates, perferendis nihil. Nobis similique dolores qui rem.
";
$examInput = "141352";
$examOutput = "543211";

$index_InnerCardContent = "
<form action=\"#\" method=\"get\" class=\"indexForm\">
	<select name=\"language\" id=\"chooseLanguage\">
		<option value=\"null\" selected>Select a Language</option>
		<option value=\"c\">C</option>
		<option value=\"cpp\">C++</option>
		<option value=\"csharp\">C#</option>
		<option value=\"java\">Java</option>
		<option value=\"python\">Python</option>
		<option value=\"rust\">Rust</option>
	</select>
	<label for=\"chooseLanguage\">Time Limit: {$timeLimit}</label>
	<button type=\"button\">Take Exam</button>
</form>
";

$index_OuterCardContent = renderComponent(new InnerCardComponent($index_InnerCardContent)) .
	"
	<div class=\"descWrapper\">
	<h3>Description:</h3>
	<p>{$examDescription}</p>
	</div>
	<div class=\"descWrapper\">
	<h3>Example:</h3>
	<p><strong>Input: </strong>{$examInput}</p>
	<p><strong>Output: </strong>{$examOutput}</p>
	</div>
</div>
";

// !---------------------------------------Account Settings Page---------------------------------------

$profilePicture = "http://placehold.it/100x100";
$username = "Placeholder";
$regDate = date("M Y");
$lastSeen = date("m-d-Y");
$email = "placeholder@email.com";
$name = "Hello World";
$org = "None";
$phoneNumber = "099230923";
$skills = "Java, Python, PHP";
$expLevel = "Intermediate";

// TODO: Create editable details
$settings_InnerCardContent = "
	<div class=\"accountDetails\">
		<img src=\"{$profilePicture}\" alt=\"User Profile Picture\" />
		<div class=\"wrapper\">
			<h1>{$username}</h1>
			<p>Member since:{$regDate}</p>
			<p>Member since:{$lastSeen}</p>
		</div>
		<button type=\"button\">Edit User Profile</button>
		<h2>Information</h2>
		<div class=\"wrapper\">
			<h4>Email</h4>
			<h3>{$email}</h3>
		</div>
		<div class=\"wrapper\">
			<h4>Name</h4>
			<h3>{$name}</h3>
		</div>
		<div class=\"wrapper\">
			<h4>Organization</h4>
			<h3>{$org}</h3>
		</div>
		<div class=\"wrapper\">
			<h4>Phone Number</h4>
			<h3>{$phoneNumber}</h3>
		</div>
		<div class=\"wrapper\">
			<h4>Skills <span>(Comma separated)</span></h4>
			<h3>{$skills}</h3>
		</div>
		<div class=\"wrapper\">
			<h4>Development Experience</h4>
			<h3>{$expLevel}</h3>
		</div>
	</div>
";

$settings_OuterCardContent = renderComponent(new InnerCardComponent($settings_InnerCardContent));