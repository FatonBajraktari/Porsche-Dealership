<?php 
include_once 'C:/xampp/htdocs/Porsche-Dealership/repository/modelRepository.php';
include_once 'C:/xampp/htdocs/Porsche-Dealership/model/model.php';
    
$modelRepo = new ModelRepository();
if(isset($_GET['id'])){
  $modelRepo = $modelRepo->getModelById($_GET['id']);
}

    if(isset($_POST['delete'])){
        // echo "<script>alert('". $model->getImage1()."')</script>";
        $modelRepository = new ModelRepository();
        $modelRepository->deleteModel($modelRepo['id']);

        header("Location:dashboard.php");
     }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Model</title>
    <link rel="icon" href="../assets/icon.png" type="icon/png">
    <link rel="stylesheet" href="../css/user1.css">
</head>
<body>
  
<header class="header1">
        <div id="menuuser1">
            <img id="menu" src="../assets/menu.jpg" alt="menu" onclick="openMenu()">
            <div class="menu" id="sideMenu">
                <a href="javascript:void(0)" class="closebtn" onclick="closeMenu()">&#10006;</a>
                <a href="index.php">Dashboard</a>
                <a href="users.php">Users</a>
            </div>
        </div>
        <a href="../index.php"><img class="p1" src="../assets/p1.png" alt="porschename"></a>
        <div></div>
    </header>

    <div class="container">
        <div id="divbicon"><img id="bicon" src="../assets/icon.png"></div>
        <br>
        
        <form action="" method="post" enctype="multipart/form-data">
            <label for="model"><b>Model Name</b> </label>
            <input type="text" placeholder="Please enter Model Name" name="model" id="model" disabled value="<?php if(!empty($modelRepo['model'])){
            echo $modelRepo['model'];
            }?>">
            <div id="modelError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="about"><b>About</b></label>
            <textarea placeholder="Describe your Model" name="about" id="about" style="height: 150px; width: 400px;" disabled >
            <?php if(!empty($modelRepo['about'])){
            echo $modelRepo['about'];}?>
            </textarea>
            <div id="aboutError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="image"><b>Image 1</b></label>
            <input type="file" placeholder="Choose your image" name="image1" id="image" disabled ="<?php if(!empty($modelRepo['image1'])){
            echo $modelRepo['image1'];}?>">
            <div id="imageError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="imagee"><b>Image 2</b></label>
            <input type="file" placeholder="Choose your image" name="image2" id="imagee" disabled  value="<?php if(!empty($modelRepo['image2'])){
            echo $modelRepo['image2'];}?>">
            <div id="imageeError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="iimage"><b>Image 3</b></label>
            <input type="file" placeholder="Choose your image" name="image3" id="iimage" disabled  value="<?php if(!empty($modelRepo['image3'])){
            echo $modelRepo['image3'];}?>">
            <div id="iimageError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="immage"><b>Image 4</b></label>
            <input type="file" placeholder="Choose your image" name="image4" id="immage" disabled  value="<?php if(!empty($modelRepo['image4'])){
            echo $modelRepo['image4'];}?>">
            <div id="immageError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="imagge"><b>Image 5</b></label>
            <input type="file" placeholder="Choose your image" name="image5" id="imagge" disabled  VALUES="<?php if(!empty($modelRepo['image5'])){
            echo $modelRepo['image5'];}?>">
            <div id="imaggeError" style="color: red; font-style: italic; font-size: small;"></div>
</select>   
            <button type="submit" name="delete" onclick="validation()">Delete Model</button>
        </form>    
    </div>
    <?php

        include_once 'C:/xampp/htdocs/Porsche-Dealership/repository/userRepository.php';
        include_once 'C:/xampp/htdocs/Porsche-Dealership/model/user.php';







?>
</body>
</html>