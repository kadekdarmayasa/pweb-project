<?php  
  require 'connection.php';
  $email = $_GET['email'];
  $emailInDB = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");
  $user = mysqli_fetch_assoc($emailInDB);
  $id = $user['id_user'];

  if(isset($_POST['submit'])) {
    $password = $_POST['password'];
    $password2 = $_POST['repeat-pass']; 

    if($password !== $password2) {
      $passError = true;
    } else {
      $password = password_hash($password, PASSWORD_DEFAULT);
      $query = mysqli_query($connection, "UPDATE `users` SET password = '$password' WHERE id_user = $id");
      echo "<script>
        alert('Your password has been changed!');
        document.location.href = 'login.php';
      </script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <style>
    * {
      font-family: 'Poppins';
    }

    small {
      color: red;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <input type="password" name="password" id="password" placeholder="New Password" required>
    <br>
    <br>
    <input type="password" name="repeat-pass" id="repeat-pass" placeholder="Repeat Password" required>
    <br>
    <?php if(isset($passError)) : ?>
    <small>Password doesn't match</small>
    <?php endif; ?>
    <br>
    <button type="submit" name="submit">Reset Password</button>
  </form>
</body>
</html>