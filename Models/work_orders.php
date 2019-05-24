<?php

    class Work_orders{
        var $COD_ORDER;
        var $STATE_ORDER;
        var $CLIENT_RUT;
        var $WORKER_RUT;

        function __construct($COD_ORDER, $STATE_ORDER, $CLIENT_RUT, $WORKER_RUT){
            $this->COD_ORDER = $COD_ORDER;
            $this->STATE_ORDER = $STATE_ORDER;
            $this->CLIENT_RUT = $CLIENT_RUT;
            $this->WORKER_RUT = $WORKER_RUT;
        }

        function save(){
            $sql = "INSERT INTO work_orders (COD_ORDER, STATE_ORDER, CLIENT_RUT, WORKER_RUT)
                    VALUES ('".$this->COD_ORDER."','".$this->STATE_ORDER."','".$this->CLIENT_RUT."','".$this->WORKER_RUT."')";

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