<?php

    class User{
        var $RUT;
        var $DV;
        var $NAME;
        var $LAST_NAME;
        var $DIRECTION;
        var $COMMUNE;
        var $EMAIL;
        var $TYPE_USER;
        var $RATING;

        function __construct($RUT, $DV, $NAME, $LAST_NAME, $DIRECTION, $COMMUNE, $EMAIL, $TYPE_USER, $RATING){
            $this->RUT = $RUT;
            $this->DV = $DV;
            $this->NAME = $NAME;
            $this->LAST_NAME = $LAST_NAME;
            $this->DIRECTION = $DIRECTION;
            $this->COMMUNE = $COMMUNE;
            $this->EMAIL = $EMAIL;
            $this->TYPE_USER = $TYPE_USER;
            $this->RATING = $RATING;
        }

        function save(){
            $sql = "INSERT INTO user (RUT, DV, NAME, LAST_NAME, DIRECTION, COMMUNE, EMAIL, TYPE_USER, RATING)
                    VALUES ('".$this->RUT."','".$this->DV."','".$this->NAME."','".$this->LAST_NAME."','".$this->DIRECTION."','".$this->COMMUNE."','".$this->EMAIL."','".$this->TYPE_USER."','".$this->RATING."')";

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