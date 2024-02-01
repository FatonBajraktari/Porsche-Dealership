<?php
class Model{
    private $id;
    private $model;
    private $about;
    private $image1;
    private $image2;
    private $image3;
    private $image4;
    private $image5;


    function __construct($model,$about,$image1,$image2,$image3,$image4,$image5){
            $this->model = $model;
            $this->about = $about;
            $this->image1 = $image1;
            $this->image2 = $image2;
            $this->image3 = $image3;
            $this->image4 = $image4;
            $this->image5 = $image5;
    }


    function getId(){
        return $this->id;
    }
    function getModel(){
        return $this->model;
    }
    function getAbout(){
        return $this->about;
    }
    function getImage1(){
        return $this->image1;
    }
    function getImage2(){
        return $this->image2;
    }
    function getImage3(){
        return $this->image3;
    }
    function getImage4(){
        return $this->image4;
    }
    function getImage5(){
        return $this->image5;
    }
    
}


?>