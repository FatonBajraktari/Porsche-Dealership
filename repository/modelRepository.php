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

    function getModelById($id){
        $conn = $this->connection;

        $sql = "SELECT * FROM model WHERE id='$id'";

        $statement = $conn->query($sql);
        $model = $statement->fetch();

        return $model;
    }

    function updateModel($model, $id){
         $conn = $this->connection;
         
        $modelName = $model->getModel();
        $about = $model->getAbout();
        $image1 = $model->getImage1();
        $image2 = $model->getImage2();
        $image3 = $model->getImage3();
        $image4 = $model->getImage4();
        $image5 = $model->getImage5();

         $sql = "UPDATE model SET model='$modelName', about='$about', image1='$image1', image2='$image2', image3='$image3', image4='$image4', image5='$image5' WHERE id=?";

         $statement = $conn->prepare($sql);

         $statement->execute([$id]);

         echo "<script>alert('update was successful'); </script>";
    } 

    function deleteModel($id){
        $conn = $this->connection;

        $sql = "DELETE FROM model WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 


}


?>