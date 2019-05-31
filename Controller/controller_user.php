<?php

    //Conexion a Base de Datos
    include('connect.php');

    //models a utilizar
    include('models\client.php');
    include('models\commune.php');
    include('models\professions.php');
    include('models\user.php');
    include('models\work_orders.php');
    include('models\worker.php');
    include('models\comments.php');
    
    //Funciones para AGREGAR data

        /*
        //COMMUNE
        $comuna = new Commune('Las condes');
        $comuna->save();
        echo $comuna->COD_NAME_COMM;

        //PROFESSIONS
        $profesion = new Professions('Jardinero');
        $profesion-> save();
        echo $profesion->NAME_PROFESSION;

        //USER
        $usuario = new User('14567825', '1', 'Sebastian', 'Muñoz', 'Antonio Varas', '5', 'reparada@gmail.com', '2', '7');
        $usuario-> save();

        $transform = (int)$usuario->RUT;

        if ($usuario->TYPE_USER == (int)'1') {
            //CLIENT
            $cliente = new Client($transform);
            $cliente-> save();
            echo $cliente->RUT;
        }else {
            //WORKER
            $trabajador = new Worker($transform,'1');
            $trabajador-> save();
            echo $trabajador->COD_PROFESSION;            
        }
        echo $usuario->RUT;

        //COMMENTS
        $comentarios = new Comments('19565459','13274933','prueba comentario ingresado por controlador');
        $comentarios->save();
        echo $comentarios->COMMENTS;

        //WORK_ORDERS
        $orden = new Work_orders('00002','1','19565459','13274933');
        $orden->save();
        echo $orden->COD_ORDER;

        */

    //Funciones para ELIMINAR data

    //Funciones para ACTUALIZAR data

?>
