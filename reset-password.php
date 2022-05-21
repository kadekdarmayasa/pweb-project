<?php  
  require 'functions.php';
  if(!isset($_GET['email'])) {
    header("Location: wrapper-reset-password.php");
    exit;
  }
  
  $email = $_GET['email'];
  $emailInDB = getUser($connection, "SELECT * FROM users WHERE email='$email'");
  $id = $emailInDB['id_user'];

  if(isset($_POST['submit'])) {
    $result = reset_password($_POST, $id);

    if($result === 0) {
      echo "<script>alert('Your password doesn\'t match');</script>";
    } else {
      echo "
        <script>
          alert('Congratulations 🥳🥳, your password has been changed!');
          alert('You\'ll redirect to login page');
          document.location.href = 'login.php';
        </script>
      ";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/css/reset-pass.css">
  <title>Reset Password</title>
</head>
<body>
  <div class="form">
    <h2>Enter your new password</h2>
    <form action="" method="post">
      <input type="password" name="password" id="password" placeholder="new password" autofocus required>
      <br>
      <br>
      <input type="password" name="repeat-pass" id="repeat-pass" placeholder="repeat password" required>
      <br>
      <br>
      <button type="submit" name="submit">Reset password</button>
    </form>
  </div>
</body>
</html>