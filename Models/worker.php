<?php

    class Worker{
        var $RUT;
        var $COD_PROFESSION;

    function __construct($RUT, $COD_PROFESSION){
        $this->RUT = $RUT;
        $this->COD_PROFESSION = $COD_PROFESSION;
    }
        
    function save(){
        $sql = "INSERT INTO worker (RUT, COD_PROFESSION)
                VALUES ('".$this->RUT."', '".$this->COD_PROFESSION."')";
    
    $link = connect();
    if ($link->query($sql) === TRUE ){
        return $this;
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
        return false;
    }
    }

    }

?>