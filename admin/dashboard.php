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
width: 950px; 
height: 40px; 
text-align: center;  
font-size: 20px;  
} 

#a{
    margin-left: 285px;
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
            <th colspan="6">Models</th>
            </tr>
            <th>Porsche 911</th>
             <th>Porsche Panamera</th>
              <th>Porsche Taycan</th>
               <th>Porsche 718</th>
                <th>Porsche Macan</th>
                <th>Porsche Cayenne</th>
                <th>Edit</th>
                <th>Delete</th>
             </tr>

            <tr>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            
            <tr>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                 <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
        </table>
        <br>
        <a href ="#" id = "a">Create Model</a>

        <script src="../user1.js"></script>
</body>
</html>