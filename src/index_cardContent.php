<?php
$timeLimit = 200;
$examDescription = "
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione amet sit
	ab. Tempore corporis quasi ullam a voluptatibus quam, numquam recusandae et
	voluptates, perferendis nihil. Nobis similique dolores qui rem.
";
$examInput = "141352";
$examOutput = "543211";

$index_OuterCardContent = renderComponent(new InnerCardComponent("
<form action='#' method='get' class='indexForm'>
	<select name='language' id='chooseLanguage'>
		<option value='null' selected>Select a Language</option>
		<option value='c'>C</option>
		<option value='cpp'>C++</option>
		<option value='csharp'>C#</option>
		<option value='java'>Java</option>
		<option value='python'>Python</option>
		<option value='rust'>Rust</option>
	</select>
	<label for='chooseLanguage'>Time Limit: {$timeLimit}</label>
	<button type='button'>Take Exam</button>
</form>
")) .
    "
	<div class='descWrapper'>
	<h3>Description:</h3>
	<p>{$examDescription}</p>
	</div>
	<div class='descWrapper'>
	<h3>Example:</h3>
	<p><strong>Input: </strong>{$examInput}</p>
	<p><strong>Output: </strong>{$examOutput}</p>
	</div>
</div>
";
?>