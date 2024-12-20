<?php
require "../components/components.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../styles/support.css?version=<?php echo time(); ?>" />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>

<body>
    <?= renderComponent(new NavigationComponent()); ?>
    <div class="main-wrapper">
        <main>
            <?= renderComponent(new OuterCardComponent(renderComponent(new InnerCardComponent(
                "
                    <div class='search'>
                    <label for='search-bar'><i class='fa-solid fa-magnifying-glass'></i></label>
                    <input type='text' class='search-bar' id='search-bar' placeholder='Search...'>
                    </div>
                    <p>Popular Topics</p>
                    <div class='topic-wrapper'>
                        <div class='topic'><i class='fa-solid fa-user'></i>Account Settings</div>
                        <div class='topic'><i class='fa-solid fa-lock'></i>Password Recovery</div>
                        <div class='topic'><i class='fa-solid fa-trophy'></i>Point System</div>
                    </div>
                    "
            )))); ?>

        </main>
        <?= renderComponent(new FooterComponent) ?>
    </div>
</body>

</html>