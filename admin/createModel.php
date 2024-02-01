<?php 
include_once 'C:/xampp/htdocs/Porsche-Dealership/repository/modelRepository.php';
include_once 'C:/xampp/htdocs/Porsche-Dealership/model/model.php';
    
    if(isset($_POST['create']) && $_FILES['image1'] && $_FILES['image2']
     && $_FILES['image3'] && $_FILES['image4']&& $_FILES['image5']){
        // echo "<script>alert('". $_FILES['image3']['name']."')</script>";
        $modelName = $_POST['model'];
        $about = $_POST['about'];
        $image1 = $_FILES['image1']['name'];
        $image2 = $_FILES['image2']['name'];
        $image3 = $_FILES['image3']['name'];
        $image4 = $_FILES['image4']['name'];
        $image5 = $_FILES['image5']['name'];
        $model  = new Model($modelName,$about,$image1,$image2,$image3,$image4,$image5);
        echo "<script>alert('". $model->getImage1()."')</script>";

              
        $modelRepository = new ModelRepository();
        $modelRepository->insertModel($model);

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
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <label for="model"><b>Model Name</b> </label>
            <input type="text" placeholder="Please enter Model Name" name="model" id="model" required>
            <div id="modelError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="about"><b>About</b></label>
            <textarea placeholder="Describe your Model" name="about" id="about" style="height: 150px; width: 400px;" required></textarea>
            <div id="aboutError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="image"><b>Image 1</b></label>
            <input type="file" placeholder="Choose your image" name="image1" id="image" required>
            <div id="imageError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="imagee"><b>Image 2</b></label>
            <input type="file" placeholder="Choose your image" name="image2" id="imagee" required>
            <div id="imageeError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="iimage"><b>Image 3</b></label>
            <input type="file" placeholder="Choose your image" name="image3" id="iimage" required>
            <div id="iimageError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="immage"><b>Image 4</b></label>
            <input type="file" placeholder="Choose your image" name="image4" id="immage" required>
            <div id="immageError" style="color: red; font-style: italic; font-size: small;"></div>

            <label for="imagge"><b>Image 5</b></label>
            <input type="file" placeholder="Choose your image" name="image5" id="imagge" required>
            <div id="imaggeError" style="color: red; font-style: italic; font-size: small;"></div>
</select>   
            <button type="submit" name="create" onclick="validation()">Create Model</button>
        </form>    
    </div>
    <?php

        include_once 'C:/xampp/htdocs/Porsche-Dealership/repository/userRepository.php';
        include_once 'C:/xampp/htdocs/Porsche-Dealership/model/user.php';







?>
    <script src="../models.js"></script>
</body>
</html>