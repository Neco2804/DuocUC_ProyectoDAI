<?php

    class Professions{
        var $id;
        var $NAME_PROFESSION;

        function __construct($NAME_PROFESSION) {
        $this->NAME_PROFESSION = $NAME_PROFESSION;
        }

        function save(){
            $sql = "INSERT INTO professions (NAME_PROFESSION)
                    VALUES ('".$this->NAME_PROFESSION."')";
            
            $link = connect();
            if ($link->query($sql) === TRUE) {
                $id = mysqli_insert_id($link);
                $this->id = $id;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }
    }

?>