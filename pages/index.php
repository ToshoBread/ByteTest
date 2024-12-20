<?php
require "../components/components.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?php echo time(); ?>" />
    <link rel="stylesheet" href="../styles/form.css?version=<?php echo time(); ?>" />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>
<style>
    .container {
        display: flex;
        flex-direction: column;
        gap: 3rem;
        width: 50%;
        margin: 0 auto;
        padding: 2rem;
        align-content: center;
    }

    img {
        width: 100%;
    }

    h1,
    a {
        font-size: var(--font-l);
        color: var(--main-bg);
    }

    a:hover {
        color: var(--topnav-bg);
    }

    footer {
        z-index: 1;
    }
</style>

<body>
    <div class="main-wrapper">
        <div class="container">
            <img src="../imgs/logoLong.png" alt="">
            <h1>An online examination website
                where Learning one byte at a time
                makes exams Easy Byte by Byte.</h1>
            <a href="login.php">Continue to Login</a>
        </div>
        <?= renderComponent(new FooterComponent); ?>
    </div>
</body>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>