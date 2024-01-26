<?php 

    if(isset($_SESSION['id'])){
        header('index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
    <link rel="icon" href="assets/icon.png" type="icon/png">
    <link rel="stylesheet" href="css/user.css">
    
</head>
<body class="body">
    <header class="header1">
        <div>
            <img id="menu" src="assets/menu.jpg" alt="menu" onclick="openMenu()">
           
            <div class="menu" id="sideMenu">
                <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&#10006;</a> 
                <a href="index.php">Home</a>
                <a href="index.php#link1">About Us</a>
                <?php 
                if(isset($_SESSION['id'])){
                ?>
                <a href="index.php#galery">Gallery</a>
                <a href="models.php">Models</a>
                <?php } ?>
                <a href="index.php#link2">Contact</a>
                <?php 
                if(isset($_SESSION['id'])){
                ?>
                <a href="logout.php">Log out</a>
                <?php } ?>
            </div>
       </div>

       <a href="index.php"><img class="p1" src="assets/p1.png" alt="porschename"></a> 

       <div></div>
       
      

</header>
    
    <div class="container">
        <div id="divbicon"><img id="bicon" src="assets/icon.png"></div>
        <br>
        <form action="" id="" method="post">
       
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Please enter your Email" name="email" id="email" required>
        <div id="emailError" style="color: red; font-style: italic; font-size: small;"></div>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter your Password" name="password" id="password" required>
        <div id="passwordError" style="color: red; font-style: italic; font-size: small;"></div>
       
     <button type="submit" name="login" onclick="validation()">Login</button>
        <p id="signup" style="font-style: italic; font-size: small;">Don't have an account <a href="signup.php">sign up</a></p>
        </form>
    </div>

    <?php 

        include 'repository/userRepository.php';

        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $userRepo = new UserRepository();
            $userRepo = $userRepo->loginUser($email,$password);
            // echo var_dump($userRepo);
            // echo "<script>alert('" . var_dump($userRepo) ."')</script>";

            // echo $userRepo['id'];
            if($user){
                session_start();
                $_SESSION['id'] = $userRepo['id'];
                $_SESSION['first_name'] = $userRepo['first_name'];
                $_SESSION['last_name'] = $userRepo['last_name'];
                $_SESSION['email'] = $userRepo['email'];
                $_SESSION['password'] = $userRepo['password'];
                $_SESSION['role'] = $userRepo['role'];



                if($_SESSION['role'] == 'admin'){
                    header("Location:admin/dashboard.php");
                }else{
                    header("Location:index.php");

                }
            }else{
                echo "<script>alert('login failed')</script>";
            }
        }

    
    ?>

    <script src="user.js"></script>
    

</body>
</html>