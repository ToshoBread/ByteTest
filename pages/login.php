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
        <form method="post" class="login-form" autocomplete="off">
            <input type="text" name="loginInput" placeholder="Username or Email" id="loginInput" required />
            <input type="password" name="password" placeholder="Password" id="password" required />
            <div class="extra-wrapper">
                <input type="checkbox" name="rememberMe" value="remembered" id="remember-me" />
                <label for="remember-me">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <div class="message"></div>
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
<script src="../scripts/login.js?version=<?= time(); ?>"></script>

</html>