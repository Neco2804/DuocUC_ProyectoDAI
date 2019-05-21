<?php

    //Conexion a Base de Datos
    include('connect.php');

    //Models a utilizar
    include('Models\client.php');
    include('Models\commune.php');
    include('Models\professions.php');
    include('Models\user.php');
    include('Models\work_orders.php');
    include('Models\worker.php');
    
    //Funciones para agregar data
    
        /*//COMMUNE
        $comuna = new Commune('Las Condes');
        $comuna->save();
        echo $comuna->COD_NAME_COMM;

        //PROFESSIONS
        $profesion = new Professions('Jardinero');
        $profesion-> save();
        echo $profesion->NAME_PROFESSION;*/

        //USER
        $usuario = new User('14567825', '1', 'Sebastian', 'Muñoz', 'Antonio Varas', '5', 'reparada@gmail.com', '1', '7');
        $usuario-> save();
        if ($usuario.$TYPE_USER == 1) {
            //CLIENT
            $cliente = new Client($this->$usuario.$RUT);
            $cliente-> save();
            echo $cliente->RUT;
        }if($usuario.$TYPE_USER == 2){
            //WORKER
            $trabajador = new Worker($this->$usuario.$RUT,'1');
            $trabajador-> save();
            echo $trabajador->COD_PROFESSION;            
        }
        echo $usuario->RUT;

        //WORK_ORDERS - PENDIENTE


    //Funciones para eliminar data

    //Funciones para actualizar data

?>