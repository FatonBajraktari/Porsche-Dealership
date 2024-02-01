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

    foreach($models as $model){
        $i = 1; 
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
                const imgArray$i = [".$model['image1'].",".$model['image2'].",".$model['image3'].",".$model['image4'].",".$model['image5']."];
            </script>
        ";
        $i++;
    }
 ?>
</div>



<!-- 

<div class="image-container">
    <img id="slideshow1" src="" alt="">
    <div class="popup">
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet semper tortor, a convallis erat mattis maximus.</p>
    </div>
    <br>
    <div id="divarrow">
    <img id="arrow" src="assets/arrow.png" onclick="changeImg1()">
    </div>


</div>


<div class="image-container">
    <img id="slideshow2" src="" alt="">

    <div class="popup">
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet semper tortor, a convallis erat mattis maximus.</p>
    </div>
    <br>
    <div id="divarrow">
    <img id="arrow" src="assets/arrow.png" onclick="changeImg2()">
</div>

</div>

</div>



<div id="divslideshow">
    <div class="image-container">
    <img id="slideshow3" src="" alt="">
    <div class="popup">
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet semper tortor, a convallis erat mattis maximus.</p>
    </div>
    <br>
    <div id="divarrow">
    <img id="arrow" src="assets/arrow.png" onclick="changeImg3()">
</div>
</div>


<div class="image-container">
        <img id="slideshow4" src="" alt="">
        <div class="popup">
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet semper tortor, a convallis erat mattis maximus.</p>
        </div>
        <br>
        <div id="divarrow">
        <img id="arrow" src="assets/arrow.png" onclick="changeImg4()">
    </div>
    </div>

    <div class="image-container">
        <img id="slideshow5" src="" alt="">
        <div class="popup">
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque laoreet semper tortor, a convallis erat mattis maximus.</p>
        </div>
        <br>
        <div id="divarrow">
        <img id="arrow" src="assets/arrow.png" onclick="changeImg5()">
    </div>

    </div>



</div> -->

 <script src="models.js">

 </script>



</body>





















</html>