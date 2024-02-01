<?php                
 include_once  "C:/xampp/htdocs/Porsche-Dealership/database/databaseConnection.php";
 include_once  "C:/xampp/htdocs/Porsche-Dealership/model/model.php";

class ModelRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection();
        $this->connection = $conn->startConnection();
    }


    function insertModel($model){

        $conn = $this->connection;

        $modelName = $model->getModel();
        $about = $model->getAbout();
        $image1 = $model->getImage1();
        $image2 = $model->getImage2();
        $image3 = $model->getImage3();
        $image4 = $model->getImage4();
        $image5 = $model->getImage5();

        // echo "<script>alert('". $image4 ."')</script>";


        $sql = "INSERT INTO model (model,about,image1,image2,image3,image4,image5) VALUES (?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$modelName,$about,$image1,$image2,$image3,$image4,$image5]);

        echo "<script> alert('User has been inserted successfuly!'); </script>";

    }

    function getAllModels(){
        $conn = $this->connection;

        $sql = "SELECT * FROM model";

        $statement = $conn->query($sql);
        $models = $statement->fetchAll();

        return $models;
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



}


?>