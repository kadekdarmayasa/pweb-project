<?php  
  require 'connection.php';

  function query($conn, $query) {
    $query = mysqli_query($conn, $query);
    return $query;
  }

  function getUser($conn, $query) {
    $query = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($query);
    return $result;
  }

  function reset_password($data, $id) {
    global $connection;
    $password = $data['password'];
    $password2 = $data['repeat-pass']; 

    if($password !== $password2) {
      return 0;
    } else {
      $password = password_hash($password, PASSWORD_DEFAULT);
      mysqli_query($connection, "UPDATE `users` SET password = '$password' WHERE id_user = $id");
      return 1;
    }
  }

  function registration($data) {
    global $connection;  
    $name = htmlspecialchars($data['name']);
    $username = htmlspecialchars($data['username']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    if(count(explode('-', $username)) > 1 || count(explode(' ', $username)) > 1) {
        return 'invalid-username';
    } else {
        $query = query($connection, "SELECT * FROM users WHERE email = '$email'");
        $result = mysqli_num_rows($query);

        if($result < 1) {
            $query = mysqli_query($connection, 
                "INSERT INTO users(`id_user`, `role`, `nama`, `email`, `username`, `password`) 
                VALUES (null, 2, '$name', '$email', '$username', '$password');
            ");

            if($query) {
                return "registration-success";
            }
        } else {
            return "email-registered";
        }
    }
  }

  function login($data) {
    global $connection;
    $email = $data['email'];
    $password = $data['password'];
    $query = query($connection, "SELECT * FROM users WHERE email = '$email'");

    if(mysqli_num_rows($query)) {
        $user = mysqli_fetch_assoc($query);
        $passwordDB = $user['password'];
        $id = $user['id_user'];
        $role = $user['role'];
        if(password_verify($password, $passwordDB)) {
            $_SESSION['id'] = $id;
            if(isset($_POST['remember-me'])) {
                setcookie('id', $id, time() + 7 * 24 * 60 * 60);
                setcookie('key', hash('whirlpool', $email), time() + 7 * 24 * 60 * 60);
            }
            if($role > 1) {
                header('Location: Dashboard/siswa.php');
                exit;
            } else {
                header('Location: Dashboard/admin.php?id=' . $id);
                exit;
            }
        } else {
            return 'password-error';        
        }
    } else {
        return 'unregistered-email';
    }
  }

  function googleLogin($code, $client) { 
      global $connection;
      $token = $client->fetchAccessTokenWithAuthCode($code);

       if(!isset($token["error"])){    
        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
    
        // Storing data into database
        $name = mysqli_real_escape_string($connection, trim($google_account_info->name));
        $email = mysqli_real_escape_string($connection, $google_account_info->email);
        // $profile_pic = mysqli_real_escape_string($connection, $google_account_info->picture);
        $usernameExp = explode(' ', $name);
        $username = '';
        foreach($usernameExp as $user) {
            $username .= $user;
        }
        $username = strtolower($username);

        // checking user already exists or not
        $get_user = query($connection, "SELECT * FROM `users` WHERE `email`='$email'");
        $result = mysqli_fetch_assoc($get_user);
        $id = $result['id_user'];
    
        if(mysqli_num_rows($get_user) > 0){
            $_SESSION['id'] = $id; 
            header('Location: Dashboard/admin.php');
            exit;
        }
        else{   
            // if user not exists we will insert the user
            $insert = query($connection, "INSERT INTO `users` (`id_user`, `role`, `nama`, `email`, `username`, `password`) VALUES (NULL, '2', '$name' , '$email', '$username', '')");
            $get_user = getUser($connection, "SELECT * FROM `users` WHERE `email`='$email'");
            $id = $get_user['id_user'];
            
            if($insert){
                $_SESSION['id'] = $id;
                header('Location: Dashboard/admin.php');
                exit;
            }
            else{
                echo "Sign up failed!(Something went wrong).";
            }

        }
    }
    else{
        header('Location: login.php');
        exit;
    }
  }
?>