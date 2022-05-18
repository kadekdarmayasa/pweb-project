<?php  
    require 'connection.php';

    if(isset($_POST['register'])) {
        $name = htmlspecialchars($_POST['name']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        if(count(explode('-', $username)) > 1 || count(explode(' ', $username)) > 1) {
            echo "<script>
                alert('invalid username');
            </script>";
        }

        $query = mysqli_query($connection, "SELECT * FROM users");
        $users = [];
        while($row = mysqli_fetch_assoc($query)) {
            $users[] = $row;
        }

        for($i = 0; $i < count($users); $i++) {
            if($users[$i]['username'] == $username) {
                echo "Ada";
            }
        }

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
   
    <script src="https://kit.fontawesome.com/c7301203e1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="src/css/signup.css?v=<?php echo time();?>">
</head>

<body>
    <section id="loginpage">
        <div class="tab-kiri">
        </div>
        <div class="tab-kanan sign-up">
            <div class="topsec">
                <div class="iconpage">
                    <div class="icon">
                        <i class="fa-brands fa-accessible-icon fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="formsect">
                <form action="" method="POST">
                    <div class="input">
                        <input type="text" placeholder="Name" name="name" required>
                        <input type="text" placeholder="Username" name="username" required>
                        <input type="email" placeholder="Email" name="email" required>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <div class="login">
                        <input type="submit" value="Register" name="register">
                    </div>
                </form>
            </div>
            <footer>
                <div class="footer">
                    <p>Already have an account?</p>&nbsp;
                    <p><a href="login.php">Log In</a></p>
                </div>
            </footer>
        </div>

    </section>
</body>

</html>