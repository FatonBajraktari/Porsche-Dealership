<?php                
 include_once  "C:/xampp/htdocs/Porsche-Dealership/database/databaseConnection.php";
 include_once  "C:/xampp/htdocs/Porsche-Dealership/model/user.php";



// $user = new User("Dren","Statovci", "ds12@gmai.com", "Dren");   

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $first_name = $user->getFirstName();
        $last_name = $user->getLastName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = $user->getRole();

        if($role){
        echo "<script> alert('User has been inserted successfuly!'); </script>";
            $sql = "INSERT INTO user (first_name,last_name,email,password,role) VALUES (?,?,?,?,?)";
            $statement = $conn->prepare($sql);
            $statement->execute([$first_name,$last_name,$email,$password,$role]);
        }else{
        $sql = "INSERT INTO user (first_name,last_name,email,password) VALUES (?,?,?,?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$first_name,$last_name,$email,$password]);
        }

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($user,$id){
         $conn = $this->connection;
        $first_name = $user->getFirstName();
        $last_name = $user->getLastName();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = $user->getRole();

         $sql = "UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email',password='$password' WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 


   function loginUser($email,$password){
    $conn = $this->connection;

    $sql = "select * from user where email = ? and password = ?";

    $statement = $conn->prepare($sql);

    $statement->execute([$email,$password]);

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    return $statement->fetch();
   }



}


?>