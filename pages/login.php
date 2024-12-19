<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css?version=<?= time(); ?>" />
    <link rel="stylesheet" href="../styles/form.css?version=<?= time(); ?>" />
    <link rel="stylesheet" href="../styles/login.css?version=<?= time(); ?>" />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
</head>

<body>
    <img src="../imgs/logoFullWhite.png" class="logo-full" alt="ByteTest Logo & Tagline" />
    <div class="container">
        <img src="../imgs/byteTestLogo.png" alt="ByteTest Logo" class="logo" />
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
        <form action="index.php" method="post" class="login-form" autocomplete="off">
            <input type="text" name="username" placeholder="Username or Email" id="email" required />
            <input type="password" name="password" placeholder="Password" id="passsword" required />
            <div class="extra-wrapper">
                <input type="checkbox" name="rememberMe" value="remembered" id="remember-me" />
                <label for="remember-me">Remember me</label>
                <a href="#">Forgot password</a>
            </div>
            <input type="submit" name="login" value="Log In" class="submit" />
            <div class="divide-wrapper">
                <hr />
                <p>OR</p>
                <hr />
            </div>
            <div class="socials-wrapper">
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