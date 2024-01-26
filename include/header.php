<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/models.css">
    <title>Porsche Home</title>
    
    <link rel="icon" href="assets/icon.png" type="icon/png">
    
</head>

<body class="porsche" >
     
<header class="header">
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

    <a href="index.php"><img class="p" src="assets/p1.png" alt="porschename"></a> 
            
    <?php 
        if(!isset($_SESSION['id'])){
    ?>
    <a href="login.php"><img class="user" src="assets/user.png" alt="user"></a>
    <?php }else{ ?>
    <?php echo "<h3> Hello, " . $_SESSION['first_name']; } ?>
</header>