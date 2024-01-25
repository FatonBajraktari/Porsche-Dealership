<?php 
include_once 'database/databaseConnection.php';
include_once 'model/user.php';


$user = new User("Dren","Statovci", "ds12@gmai.com", "Dren");
echo $user->getFirstName();


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

        $sql = "INSERT INTO user (first_name,last_name,email,password) VALUES (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$first_name,$last_name,$email,$password]);

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

    function updateUser($id,$first_name,$last_name,$email,$password){
         $conn = $this->connection;

         $sql = "UPDATE user SET first_name=?, last_name=?, email=?,password=? WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$first_name,$last_name,$email,$password,$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 
}

//   $userRepo = new UserRepository;

// $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>