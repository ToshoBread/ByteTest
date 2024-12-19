<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../styles/base.css?version=<?= time(); ?>" />
  <link rel="stylesheet" href="../styles/form.css?version=<?= time(); ?>" />
  <link rel="stylesheet" href="../styles/register.css?version=<?= time(); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
  <title>ByteTest</title>
</head>

<body>
  <div class="container">
    <img src="../imgs/byteTestLogo.png" alt="ByteTest Logo" class="logo" />
    <h1>Sign Up</h1>
    <form action="login.html" method="#">
      <input type="email" name="email" placeholder="Email" autocomplete="off" required />
      <input type="password" name="password" placeholder="Password" required />
      <input type="password" name="confirm-password" placeholder="Confirm Password" required />
      <hr />
      <input type="date" name="birth-date" id="birth-date" required />
      <div class="gender-wrapper">
        <input type="radio" name="gender" value="male" id="male" required />
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female" />
        <label for="female">Female</label>
        <input type="radio" name="gender" value="hidden" id="hidden" />
        <label for="hidden">Prefer Not to Say</label>
      </div>
      <hr />
      <input type="submit" value="Sign Up" />
    </form>
    <p>Already have an account? <a href="login.php">Click Here</a></p>
  </div>
</body>

</html>