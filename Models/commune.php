<?php

    class Commune{
        var $id;
        var $COD_NAME_COMM;

        function __construct($COD_NAME_COMM) {
        $this->COD_NAME_COMM = $COD_NAME_COMM;
        }

        function save(){
            $sql = "INSERT INTO commune (COD_NAME_COMM)
                    VALUES ('".$this->COD_NAME_COMM."')";
            
            $link = connect();
            if ($link->query($sql) === TRUE) {
                $id = mysqli_insert_id($link);
                $this->id = $id;
                return $this;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                return false;
            }
        }
    }

?>