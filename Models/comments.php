<?php

    class Comments{
        var $ID_COMMENT;
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
            $this->ID = $ID_COMMENT;
            return $this;
        }else {
            echo "Error: " . $sql . "<br>" . $link->error;
            return false;
        }
        }    
    }

?>