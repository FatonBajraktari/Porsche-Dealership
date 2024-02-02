<html>
<head>
    <title>
        Models
    </title>

    <link rel="icon" href="assets/icon.png" type="icon/png">
    <link rel="stylesheet" href="css/models.css">
</head>

<body class="model">
    
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
            
            <a href="login.php"><img class="user" src="assets/user.png" alt="user"></a>
           


 </header>
<div id='divslideshow'>
 <?php 
    include_once  "C:/xampp/htdocs/Porsche-Dealership/repository/modelRepository.php";
    $models = new ModelRepository();
    $models = $models->getAllModels();
$i=1;
    foreach($models as $model){
        
        echo "
            <div class='image-container'>
            <img id='slideshow$i' src='' alt=''>
            <div class='popup'>
                
                <p>".$model['about']."</p>
            </div>
                <br>
                <div id='divarrow'>
                <img id='arrow' src='assets/arrow.png' onclick='changeImg$i()'>
            </div>
            </div>
            <script>
                const imgArray$i = ['assets/".$model['image1']."', 'assets/".$model['image2']."', 'assets/".$model['image3']."', 'assets/".$model['image4']."', 'assets/".$model['image5']."'];
            </script>
        ";
        $i++;
    }
 ?>
</div>


 <script src="models.js">

 </script>

</body>
</html>