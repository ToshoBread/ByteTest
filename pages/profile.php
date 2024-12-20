<?php
require "../components/components.php";
require "../server/content.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?= time(); ?>" />
    <link rel="stylesheet" href="../styles/profile.css?version=<?= time(); ?>" />
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
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
            <div class='dashboard-header'>
                <div class='user-profile'>
                    <div class='pic-mask'>
                        <img src='../imgs/byteTestLogoWhite.png' class='profilePicture' />
                    </div>
                    <div class='text-wrapper'>
                        <h3>{$username}</h3>
                        <h5>Rank | {$expLevel}</h5>
                    </div>
                </div>
                <h3>Dashboard</h3>
                <div class='chat'>
                    <i class='fa-regular fa-comment-dots'></i>
                    <i class='fa fa-caret-down'></i>
                </div>
            </div>
            <div class='dashboard-grid'>
                <div class='dashboard-items overview'>
                    <p>Overview</p>
                    <p>{$skills}</p>
                </div>
                <div class='dashboard-items ranking'>
                    <p>Rankings</p>
                    <div class='rank-wrapper'>
                        <div class='rank'></div>
                        <div class='rank'></div>
                        <div class='rank'></div>
                    </div>
                </div>
                <div class='dashboard-items score'>
                    <p>Total Score</p>
                    <p><span class='points'>{$totalFormattedScore}</span> Points</p>
                </div>
                <div class='dashboard-items language'>
                    <p>Top Languages Used</p>
                    <div class='top-languages'>
                    <p>{$firstLanguage}<span class='points'>{$firstLanguagePoints}</span> Points</p>
                    <p>{$secondLanguage}<span class='points'>{$secondLanguagePoints}</span> Points</p>
                    <p>{$thirdLanguage}<span class='points'>{$thirdLanguagePoints}</span> Points</p>
                    </div>
                </div>
                <div class='dashboard-items follower'>
                    <p>Followers</p>
                    <p>{$followers}</p>
                </div>
            </div>"
                ))
            )); ?>
        </main>
        <?= renderComponent(new FooterComponent()); ?>
    </div>
</body>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>