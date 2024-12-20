<?php
require "../components/components.php";
include "../server/content.php"
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../styles/exam.css?version=<?php echo time(); ?>" />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>

<body>
    <?= renderComponent(new NavigationComponent()); ?>
    <div class="main-wrapper">
        <main>
            <?=
                renderComponent(new OuterCardComponent(
                    renderComponent(new InnerCardComponent("
                    <div class='desc-wrapper'>
                        <h3>Description:</h3>
                        <p>{$practiceDescription}</p>
                    </div>
                        <div class='desc-wrapper'>
                        <p>{$extraDescription}</p>
                    </div>
                    ")) .
                    renderComponent(new EditorComponent())
                ));
            ?>
        </main>
        <?= renderComponent(new FooterComponent); ?>
    </div>
</body>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>