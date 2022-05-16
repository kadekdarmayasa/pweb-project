<?php  
  require 'connection.php';

  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $emailInDB = mysqli_query($connection, "SELECT `email` from `users` WHERE `email` = '$email'");
    if(mysqli_num_rows($emailInDB) <= 0) {
      $error = true;
    } else {
      header("location: reset-password.php?email=$email");
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wrapper</title>
</head>
<body> 
  <form action="" method="post">
  <input type="email" name="email" id="email" placeholder="Email" required>
  <br>
  <?php if(isset($error)) : ?>
    <small style="color: red">Email is not registered yet!</small>
  <?php endif; ?>
  <br>
  <button type="submit" name="submit">send</button>
  </form>
</body>
</html>