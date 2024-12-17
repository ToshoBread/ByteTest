<?php
require "../components/components.php";
require "../src/profile_cardContent.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../styles/profile.css?version=<?php echo time(); ?>" />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>

<body>
    <?php echo renderComponent(new NavigationComponent()); ?>
    <div class="mainWrapper">
        <main>
            <?php echo renderComponent(new OuterCardComponent($profile_OuterCardContent)); ?>
        </main>
        <?php echo renderComponent(new FooterComponent); ?>
    </div>
</body>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>