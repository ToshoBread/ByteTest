<?php
require "../components/components.php";
require "../src/settings_cardContent.php";
require "../src/profile_cardContent.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?= time(); ?>" />
    <link rel="stylesheet" href="../styles/profile.css?version=<?= time(); ?>" />
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
                <div class='dashboard-items overview'>Overview</div>
                <div class='dashboard-items ranking'>Rankings</div>
                <div class='dashboard-items score'>Total Score</div>
                <div class='dashboard-items language'>Top Languages Used</div>
                <div class='dashboard-items follower'>Followers</div>
            </div>"
                ))
            )); ?>
        </main>
        <?= renderComponent(new FooterComponent()); ?>
    </div>
</body>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>