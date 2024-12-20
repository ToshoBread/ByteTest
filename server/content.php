<?php
// ^ Examination Placeholder Content
$timeLimit = 200;
$examDescription = "
Your task is to make a function that can take any non-negative integer as an
argument and return it with its digits in descending order. Essentially, rearrange
the digits to create the highest possible number.
";
$examInput = "42145";
$examOutput = "54421";

//^ Practice Placeholder Content
$practiceDescription = 'Make a simple function called greet that returns the most-famous "hello world!".';

$extraDescription = '<h3>Style Points</h3> Sure, this is about as easy as it gets. But how clever can you be to create the most creative "hello world"
you can think of? What is a "hello world" solution you would want to show your friends?';

//^ Profile Placeholder Content

$totalScore = 200135;
$totalFormattedScore = number_format($totalScore, 0, '.', ',');
$followers = 243;

$firstLanguage = "
            <img src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg' />
          ";
$firstLanguagePoints = formatScores(74574);
$secondLanguage = "
            <img src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg' />
          ";
$secondLanguagePoints = formatScores(53647);
$thirdLanguage = "
            <img src='https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg' />
          ";
$thirdLanguagePoints = formatScores(44357);

function formatScores($score)
{
    return number_format($score, 0, '.', ',');
}

//^ Settings Placeholder Content

$profilePicture = "../imgs/byteTestLogoWhite.png";
$username = "HelloWorld";
$regDate = date("M Y");
$lastSeen = date("m-d-Y");
$email = "placeholder@email.com";
$firstName = "Hello";
$lastName = "World";
$fullName = "$firstName $lastName";
$org = "None";
$phone = "099230923";
$skills = "Java, Python, PHP";
$expLevel = "Intermediate";