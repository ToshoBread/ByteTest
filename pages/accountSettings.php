<?php
require "../components/components.php";
require "cardContent.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../styles/accountSettings.css?version=<?php echo time(); ?>" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>

<body>
    <?php echo renderComponent(new NavigationComponent()); ?>
    <div class="indexMainWrapper">
        <main>
            <?php echo renderComponent(new OuterCardComponent($settings_OuterCardContent)); ?>
        </main>
        <?php echo renderComponent(new FooterComponent); ?>
    </div>
</body>
<script>
    let viewMode = document.querySelector(".viewMode");
    let editMode = document.querySelector(".editMode");
    let editButton = document.querySelector(".editBtn");
    let saveButton = document.querySelector(".save");
    let cancelButton = document.querySelector(".cancel");

    editButton.addEventListener("click", toggleHidden);
    saveButton.addEventListener("click", toggleHidden);
    cancelButton.addEventListener("click", toggleHidden);

    function toggleHidden() {
        viewMode.classList.toggle("hidden");
        editMode.classList.toggle("hidden");
    }
</script>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>