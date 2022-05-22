<?php 
  require 'app/functions.php';
  $id = $_SESSION['id'];

  $query = query($connection, "SELECT `role` FROM `users` WHERE id_user=$id");
  $result = mysqli_fetch_assoc($query);
  $role = $result['role'];

  if($role > 1) {
    header('location: Dashboard/siswa.php');
    exit;
  } else {
    header('location: Dashboard/admin.php');
    exit;
  }

  if(!isset($id)) {
    header('location: login.php');
    exit;
  }

  $user = getUser($connection, "SELECT * FROM `users` WHERE id_user = $id");
?>

<h1 style="font-family: Quicksand; font-weight: 500;">Halo, <?= $user['username']; ?> 👋🏻👋🏻</h1>
<a href="logout.php" style="font-family: Quicksand; font-weight: 500; text-decoration: none;">log out</a>