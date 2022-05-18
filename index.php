<?php 
  require 'connection.php';
  $id = $_SESSION['id'];

  if(!isset($id)) {
    header('location: login.php');
    exit;
  }

  $query = mysqli_query($connection, "SELECT * FROM `users` WHERE id_user = $id");
  $user = mysqli_fetch_assoc($query);
?>

<h1 style="font-family: Quicksand; font-weight: 500;">Halo, <?= $user['username']; ?> 👋🏻👋🏻</h1>
<a href="logout.php" style="font-family: Quicksand; font-weight: 500; text-decoration: none;">log out</a>