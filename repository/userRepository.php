<?php 
include_once 'database/databaseConnection.php';
include_once 'model/user.php';


$user = new User("Dren","Statovci", "ds12@gmai.com", "Dren");


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


   function loginUser($email,$password){
    $conn = $this->connection;

    $sql = "select * from user where email = ? and password = ?";

    $statement = $conn->prepare($sql);

    $statement->execute([$email,$password]);

    $statement->setFetchMode(PDO::FETCH_ASSOC);

    return $statement->fetch();
   }

//    function loginUser($email, $password){
//     try {
//         $conn = $this->connection;

//         $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
//         $statement = $conn->prepare($sql);
//         $statement->execute([$email, $password]);

//         // Set the fetch mode to associative array
//         $statement->setFetchMode(PDO::FETCH_ASSOC);
//         $user_data = $statement->fetch();

//         // Check if user exists
//         if ($user_data) {
//             // Instantiate a new User object with fetched data
//             $user = new User(
//                 $user_data['id'],
//                 $user_data['first_name'],
//                 $user_data['last_name'],
//                 $user_data['email'],
//                 $user_data['password']
//             );

//             // Return the User object
//             return $user;
//         } else {
//             // Return null if user does not exist
//             return null;
//         }
//     } catch (PDOException $e) {
//         // Handle database errors
//         echo "Error: " . $e->getMessage();
//         return null;
//     }
// }

}

//   $userRepo = new UserRepository;

// $userRepo->updateUser('1111','SSS','SSS','SSS','SSS','SSS');

?>