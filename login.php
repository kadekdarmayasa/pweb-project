<?php
require 'app/functions.php';
require 'google-api/vendor/autoload.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    $user = getUser($connection,  "SELECT * FROM users WHERE id_user=$id");
    $email = $user['email'];
    if($key === hash('whirlpool', $email)) {
        $_SESSION['id'] = $id;
    } 
}

if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $query = query($connection, "SELECT `role` FROM `users` WHERE `user_id`= $id");
    $result = mysqli_fetch_assoc($query);
    $role = $result['role'];


    if($role > 1) {
        header('Location: Dashboard/admin.php');
        exit;
    } else {
        header('Location: Dashboard/siswa.php');
        exit;
    }
}

// If the user click login button 
if(isset($_POST['login'])) {
    $result = login($_POST);
    $email = $_POST['email'];
    if($result == "password-error") {
        $errPass = true;
    } else if ($result == "unregistered-email") {
        $unregisteredEmail = true;
    }
} 

// If the user click sign in / sign up with google button
// Creating new google client instance
$client = new Google_Client();

$client->setClientId('66255506010-afqm4b7a7f81aio9tbs7jdb8k24r0qka.apps.googleusercontent.com');$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/pweb-project/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");

// Google Login
if(isset($_GET['code'])) {
    googleLogin($_GET['code'], $client);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <script src="https://kit.fontawesome.com/c7301203e1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="src/css/login.css?v=<?php echo time();?>">
</head>

<body>
    <section id="loginpage">
        <div class="tab-kiri">
        </div>
        <div class="tab-kanan">
            <div class="topsec">
                <div class="iconpage">
                    <div class="icon">
                        <i class="fa-brands fa-accessible-icon fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="formsect">
                <form action="" method="post">
                    <div class="input">
                        <?php if(isset($_POST['login'])) : ?>
                            <input type="email" placeholder="email" name="email" value="<?= $email; ?>" required>
                        <?php else : ?>
                            <input type="email" placeholder="email" name="email" autofocus required>
                        <?php endif; ?>
                        <?php if(isset($unregisteredEmail)) : ?>
                            <small>your email is not registered yet</small>
                        <?php endif; ?>

                        <input type="password" placeholder="password" name="password" required>
                        <?php if(isset($errPass)) : ?>
                            <small>wrong password</small>
                        <?php endif; ?>
                    </div>
                    <div class="remember">
                        <div class="me">
                            <input type="checkbox" name="remember-me">&nbsp;
                            <p>Remember Me</p>
                        </div>
                        <div class="link">
                            <p><a href="wrapper-reset-password.php">Recovery Password</a></p>
                        </div>
                    </div>
                    <div class="login">
                        <input type="submit" name="login" value="Login">
                         <a href="<?= $client->createAuthUrl(); ?>">
                            <img src="src/img/google.png" alt="google"> 
                            Sign In / Sign Up With Google
                        </a>
                    </div>
                </form>
            </div>
            <footer>
                <div class="footer">
                    <p>Don't have an account yet ?</p>&nbsp;
                    <p><a href="sign-up.php">Sign Up</a></p>
                </div>
            </footer>
        </div>

    </section>
</body>

</html>