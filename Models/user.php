<?php

    class User{
        
        var $id;
        var $dv;
        var $name;
        var $last_name;
        var $direction;
        var $commune;
        var $email;
        var $type_user;
        var $rating;

        function __construct($dv, $name, $last_name, $direction, $commune, $email, $type_user, $rating){
            $this->dv = $dv;
            $this->name = $name;
            $this->last_name = $last_name;
            $this->direction = $direction;
            $this->commune = $commune;
            $this->email = $email;
            $this->type_user = $type_user;
            $this->rating = $rating;
        }

        /*function save(){

            $sql = "INSERT INTO user (USER) VALUES ('".$this->dv."')    

        }*/

    }

?>