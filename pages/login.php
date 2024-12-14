<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css" />
    <link rel="stylesheet" href="../styles/form.css" />
    <link rel="stylesheet" href="../styles/login.css" />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>

<body>
    <img src="../imgs/logoFullWhite.png" id="logoFull" alt="ByteTestLogoAndTagline" />
    <div id="container">
        <img src="../imgs/byteTestLogo.png" alt="ByteTest Logo" id="logo" />
        <h1>Login</h1>
        <?php
        if (isset($_POST["login"])) {
            $email = filter_input(
                INPUT_POST,
                "email",
                FILTER_SANITIZE_SPECIAL_CHARS
            );
            echo "Hello {$email}";
        }
        ?>
        <form action="index.php" method="post" id="loginForm" autocomplete="off">
            <input type="text" name="username" placeholder="Username or Email" id="email" required />
            <input type="password" name="password" placeholder="Password" id="passsword" required />
            <div id="extraWrapper">
                <input type="checkbox" name="rememberMe" value="remembered" id="rememberMe" />
                <label for="rememberMe">Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <input type="submit" name="login" value="Log In" id="submit" />
            <div id="divideWrapper">
                <hr />
                <p>OR</p>
                <hr />
            </div>
            <div id="socialsWrapper">
                <button class="socials" onclick="googleSignIn()">
                    <img src="../imgs/facebookLogo.png" alt="Facebook Logo" />
                </button>
                <button class="socials" onclick="facebookSignIn()">
                    <img src="../imgs/googleLogo.png" alt="Google Logo" />
                </button>
                <button class="socials" onclick="githubSignIn()">
                    <img src="../imgs/githubLogo.png" alt="Github Logo" />
                </button>
            </div>
        </form>
        <p>Don't have an account? <a href="register.php">Click Here</a></p>
    </div>
</body>
<script src="../scripts/login.js"></script>

</html>