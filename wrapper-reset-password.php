<?php 
  require 'app/functions.php';

  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $emailInDB = query($connection, "SELECT `email` from `users` WHERE `email` = '$email'");
    if(mysqli_num_rows($emailInDB) <= 0) {
      echo "<script>
        alert('Email is not registered yet!');
      </script>";
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/css/wrapper-pass.css">
  <title>Wrapper</title>
</head>
<body> 
  <section id="wrapper">
    <h2>Enter your email</h2>
    <p>Please enter your email,<br> to make sure it's you</p>
    <form action="" method="post">
      <?php if(isset($email)) : ?>
        <input class="email"type="email" name="email" id="email" placeholder="email" value="<?= $email; ?>" required>
      <?php else : ?>
        <input class="email"type="email" name="email" id="email" autofocus placeholder="email" required>
      <?php endif; ?>
        <button type="submit" name="submit">Send</button>
    </form>
  </section>
</body>
</html>