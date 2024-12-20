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
  <link rel="stylesheet" href="../styles/home.css?version=<?php echo time(); ?>" />
  <link rel="icon" type="image/png" href="../imgs/byteTestLogoWhiteMin.png" />
  <title>ByteTest</title>
</head>

<body>
  <?= renderComponent(new NavigationComponent()); ?>
  <div class="main-wrapper">
    <main>
      <?= renderComponent(new OuterCardComponent(
        renderComponent(new InnerCardComponent(
          "
        <form action='#' method='get' class='exam-form'>
          <select name='language' id='choose-language'>
            <option value='null' selected>Select a Language</option>
            <option value='c'>C</option>
            <option value='cpp'>C++</option>
            <option value='csharp'>C#</option>
            <option value='java'>Java</option>
            <option value='python'>Python</option>
            <option value='rust'>Rust</option>
          </select>
          <label for='choose-language'>Time Limit: {$timeLimit}</label>
          <button type='button'><a href='exam.php'>Take Exam</a></button>
        </form>
        "
        )) .
        "
          <div class='desc-wrapper'>
          <h3>Description:</h3>
          <p>{$examDescription}</p>
          </div>
          <div class='desc-wrapper'>
          <h3>Example:</h3>
          <p><strong>Input: </strong>{$examInput}</p>
          <p><strong>Output: </strong>{$examOutput}</p>
          </div>
        "
      )); ?>
    </main>
    <?= renderComponent(new FooterComponent); ?>
  </div>
</body>
<script src="https://kit.fontawesome.com/1186408caf.js" crossorigin="anonymous"></script>

</html>