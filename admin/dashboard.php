<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="../assets/icon.png" type="icon/png">
    <link rel="stylesheet" href="../css/user1.css">
    <style>    
table, th, tr, td {    
border: 1px solid black;  
margin-left: auto;  
margin-right: auto;  
border-collapse: collapse;    
width: 900px; 
height: 25px; 
text-align: center;  
font-size: 20px;  
} 

#a{
    margin-left: 200px;
    text-decoration: none;
    background-color: blue;
    color: white;
    padding: 15px;
    border-radius: 10px;
}
    </style>
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

    <table>
            <tr>
                <th>ID</th>
                <th>Model</th>
                <th>About</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th>Image 4</th>
                <th>Image 5</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php 
                include_once  "C:/xampp/htdocs/Porsche-Dealership/repository/modelRepository.php";

                $models = new ModelRepository();
                $models = $models->getAllModels();

                foreach($models as $model){
                    echo 
                    "
                    <tr>
                        <td>".$model['id']."</td>
                        <td>".$model['model']."</td>
                        <td>".$model['about']."</td>
                        <td><img width='150px' src='../assets/".$model['image1']."'></td>
                        <td><img width='150px' src='../assets/".$model['image2']."'></td>
                        <td><img width='150px' src='../assets/".$model['image3']."'></td>
                        <td><img width='150px' src='../assets/".$model['image4']."'></td>
                        <td><img width='150px' src='../assets/".$model['image5']."'></td>
                        <td><a href='editModel.php?id=". $model['id']."'>Edit </a></td>
                        <td><a href='deleteModel.php?id=". $model['id']."'>Delete</a></td>
                    </tr>
                    ";
                }

            ?>

</table>
        <br>
        <a href ="createModel.php" id = "a">Create Model</a>

        <script src="../user1.js"></script>
</body>
</html>