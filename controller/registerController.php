<?php

include_once '../repository/userRepository.php';
include_once '../model/user.php';


if(isset($_POST['signup'])){
    
    if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) ||  empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user  = new User($first_name,$last_name,$email,$password);
              
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);


    }
}



?>
