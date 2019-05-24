<?php

    class Comments{
        var $ID;
        var $RUT_CLIENT_COMM;
        var $RUT_WORKER_COMM;
        var $COMMENT;

        function __construct($RUT_CLIENT_COMM, $RUT_WORKER_COMM, $COMMENT){
            $this->RUT_CLIENT_COMM = $RUT_CLIENT_COMM;
            $this->RUT_WORKER_COMM = $RUT_WORKER_COMM;
            $this->COMMENT = $COMMENT;
        }
        
        function save(){
            $sql = "INSERT INTO comment (RUT_CLIENT_COMM, RUT_WORKER_COMM, COMMENT) 
                    VALUES ('".$this->RUT_CLIENT_COMM."','".$this->RUT_WORKER_COMM."','".$this->COMMENT."')";
        $link = connect();
        if ($link->query($sql) === TRUE) {
            $this->ID = $ID;
            return $this;
        }else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }
        }    
    }

?>