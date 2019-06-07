<?php

    include 'C:\xampp\htdocs\dai\utils\connect.php';
    include 'C:\xampp\htdocs\dai\models\user.php';
    
    $allUsers = User::all_users();
    $usuarioql = User::get_user_by_email('asdfgasdfgsadgf@gmail.com');



    echo $usuarioql->NAME;
        //$link = connect();
        
        /*$result = $link->query($query);
        $resp = array();

        while($row = $result->fetch_assoc()) {
            $user = new User($row);
            array_push($resp, $user);
        }
       return $resp[0];
       
    }
    */
   


    /*
    // Comiendo de la sesión
	session_start();


    
    include ('../views/login/login.php');



    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST('username');
        $password = $_POST('password');
        echo $username;
    }else{
        if(isset($_SESSION['user_id'])){
            $user = $_POST('username');
            echo "logeado";
        }else{
            include ('../views/login/login.php');
        }
    }
   */
  ?>

