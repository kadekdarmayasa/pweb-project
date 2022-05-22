<?php  
  session_start();
  session_regenerate_id(true);

  $connection = mysqli_connect('localhost','kadekdarmayasa', 'darma2006', 'pendaftaran_siswa');

  if(mysqli_connect_errno()) {
     echo "Connection Failed".mysqli_connect_error();
     exit;
  }
?>