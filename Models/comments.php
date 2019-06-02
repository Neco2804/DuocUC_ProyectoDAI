<?php

    class Comments{
        var $id;
        var $CLIENT_RUT;
        var $WORKER_RUT;
        var $COMMENTS;

        function __construct($CLIENT_RUT, $WORKER_RUT, $COMMENTS){
            $this->CLIENT_RUT = $CLIENT_RUT;
            $this->WORKER_RUT = $WORKER_RUT;
            $this->COMMENTS = $COMMENTS;
        }
        
        function save(){
            $sql = "INSERT INTO comment (CLIENT_RUT, WORKER_RUT, COMMENTS) 
                    VALUES ('".$this->CLIENT_RUT."','".$this->WORKER_RUT."','".$this->COMMENTS."')";
        $link = connect();
            if ($link->query($sql) === TRUE) {
                $id = mysqli_insert_id($link);
                $this->id = $id;
                return $this;
            }else {
                echo "Error: " . $sql . "<br>" . $link->error;
                return false;
            }
        }    
    }

?>