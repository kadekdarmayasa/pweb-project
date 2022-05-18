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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/css/reset-password.css">
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
      <?php if(isset($passError)) : ?>
      <small>Password doesn't match</small>
      <?php endif; ?>
      <br>
      <button type="submit" name="submit">Reset password</button>
    </form>
  </div>
</body>
</html>