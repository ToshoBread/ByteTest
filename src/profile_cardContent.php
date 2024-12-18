<?php

// TODO: Write a function that adds all language scores and formats them
$totalScore = 200135; // Session/User Total Score
$totalFormattedScore = number_format($totalScore, 0, '.', ',');
$followers = 243;

// TODO: Create a system for displaying the top 3 languages with most points
$firstLanguage = checkLanguage("Javascript");
$firstLanguagePoints = formatScores(74574);
$secondLanguage = checkLanguage("Python");
$secondLanguagePoints = formatScores(53647);
$thirdLanguage = checkLanguage("C++");
$thirdLanguagePoints = formatScores(44357);

function formatScores($score)
{
    return number_format($score, 0, '.', ',');
}

function checkLanguage($language)
{
    switch ($language) {
        case 'Javascript':
            return ' 
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
            ';
        case 'Python':
            return '
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" />
            ';
        case 'C++':
            return '
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" />
            ';
        default:
            echo "Language Undetected";
            break;
    }
}

// TODO: Write a function that compares language scores, sorts values in DESC, returns key & value


// TODO: Write a function that checks the top 3 languages and returns the icon equivalent for display
