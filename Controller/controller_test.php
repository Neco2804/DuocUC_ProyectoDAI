<?php

    include 'C:\xampp\htdocs\dai\utils\connect.php';
    include 'C:\xampp\htdocs\dai\models\user.php';
    
    session_start();
        
        
        //Comprobar de envío el formulario
        if(isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $login = User::get_user_by_email($username);

            echo $login->NAME;
            echo "<br>";
            echo $login->RUT;
            echo "<br>";
            echo $login->COMMUNE;
            echo "<br>";
            //var_dump($login);
            //$_SESSION["user_id"] = $login->RUT;
            //include('../Views/index/index.php');


        }else{
            if(isset($_SESSION['user_id'])){
               // $user = User::get_user_by_id($_SESSION['user_id']);
               //include('../Views/index/index.php');
            }else{
                //include('../views/login/login.php');
                include ("../Test/view_test.php");
            }
        }

   ?>

