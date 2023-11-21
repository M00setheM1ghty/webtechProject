<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("head.php"); ?>
</head>

<body>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  ?>
  <?php include("nav.php"); ?>

  <main>
    <div class="container">
      <h1>Hotel Hämmerle</h1>
      <h2>Hier zur Registrierung für die Website:</h2>
    </div>

    <div class="container">
    <?php include("registration_form.php"); ?>

      <h3>Registriert als:</h3>
      <?php
      if (isset($_POST["fname"]) && isset($_POST["lname"])) {
        echo $_POST["fname"];
        echo $_POST["lname"];
      }
      ?>

      <h3>Mit dieser Email:</h3>
      <?php
      if (isset($_POST["fname"])) {
        echo $_POST["email"];
      }
      ?>

    </div>
  </main>
</body>

</html>