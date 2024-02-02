
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link rel="icon" href="assets/icon.png" type="icon/png">
    <link rel="stylesheet" href="css/user1.css">
</head>

<body class="body">
    <header class="header1">
        <div id="menuuser1">
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
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="name"><b>First Name</b> </label>
            <input type="text" placeholder="Please enter your Name" name="first_name" id="name" required>
            <div id="nameError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="surname"><b>Last Name</b></label>
            <input type="text" placeholder="Please enter your Last Name" name="last_name" id="surname" required>
            <div id="surnameError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Please enter your Email" name="email" id="email" required>
            <div id="emailError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            <div id="passwordError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="cpsw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Confirm Password" name="confirm" id="confirm" required>
            <div id="confirmError" style="color: red; font-style: italic; font-size: small;"></div>

            <input type="hidden" name="role" id="role" value="user">

            <button type="submit" name="signup" onclick="validation()">Sign Up</button>
        </form>

      
    </div>
  <?php 
            include_once 'controller/registerController.php';
        ?>

        <script src="user1.js"></script>
</body>

</html>
