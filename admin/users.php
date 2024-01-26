<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
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
    margin-left: 310px;
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
                <a href="index.php#galery">Users</a>
            </div>
        </div>
        <a href="../index.php"><img class="p1" src="../assets/p1.png" alt="porschename"></a>
        <div></div>
    </header>


    <table>
            <tr>
            <th>ID</th>
            <th>First Name</th>
             <th>Last Name</th>
              <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
             </tr>

             <?php 
                include_once  "C:/xampp/htdocs/Porsche-Dealership/repository/userRepository.php";

                $users= new UserRepository();
                
                $users = $users->getAllUsers();
                // var_dump($users);
                foreach($users as $user){
                
                echo "
                    <tr>
                        <td>".$user['id']."</td>
                        <td>".$user['first_name']."</td>
                        <td>".$user['last_name']."</td>
                        <td>".$user['email']."</td>
                        <td><a href='editUser.php?id=". $user['id']."'>Edit </a></td>
                        <td>".$user['id']."</td>
                    </tr>
  
                    ";}
             ?>


        </table>
        <br>
        <a href ="createUser.php" id = "a">Create User</a>

        <script src="../user1.js"></script>
</body>
</html>