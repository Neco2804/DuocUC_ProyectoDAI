<?php

    class Client{
        var $RUT;

    function __construct($RUT){
        $this->RUT = $RUT;
    }
        
    function save(){
        $sql = "INSERT INTO client (RUT)
                VALUES ('".$this->RUT."')";
    
    $link = connect();
    if ($link->query($sql) === TRUE ){
        return $this;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        return false;
    }
    }

    }

?>