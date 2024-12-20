<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles/base.css?version=<?= time(); ?>" />
  <link rel="stylesheet" href="../styles/form.css?version=<?= time(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
  <title>ByteTest</title>
</head>
<style>
  .container {
    min-width: 50%;
    margin: auto;
  }

  .logo {
    width: 10rem;
  }
</style>

<body>
  <div class="container">
    <img src="../imgs/byteTestLogo.png" alt="ByteTest Logo" class="logo" />
    <h1>Sign Up</h1>
    <form action="method=" post" class="register-form">
      <input type="text" name="username" placeholder="Username" id="username" autocomplete="off" required />
      <input type="email" name="email" placeholder="Email" id="email" autocomplete="off" required />
      <input type="password" name="password" placeholder="Password" id="password" required />
      <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required />
      <hr />
      <div class="message"></div>
      <input type="submit" value="Sign Up" />
    </form>
    <p>Already have an account? <a href="login.php">Click Here</a></p>
  </div>
</body>
<script src="../scripts/register.js"></script>

</html>