<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/base.css" />
    <link rel="stylesheet" href="../styles/form.css" />
    <link rel="stylesheet" href="../styles/register.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
    <title>ByteTest</title>
  </head>
  <body>
    <div id="container">
      <a href="login.html" class="fa fa-arrow-circle-o-left"></a>
      <img src="../imgs/byteTestLogo.png" alt="ByteTest Logo" id="logo" />
      <h1>Sign Up</h1>
      <form action="login.html" method="#">
        <input
          type="email"
          name="email"
          placeholder="Email"
          autocomplete="off"
          required
        />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        />
        <input
          type="password"
          name="confirmPassword"
          placeholder="Confirm Password"
          required
        />
        <hr />
        <input type="date" name="birthDate" id="birthDate" required />
        <div id="genderWrapper">
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
      <p>Already have an account? <a href="login.html">Click Here</a></p>
    </div>
  </body>
</html>
