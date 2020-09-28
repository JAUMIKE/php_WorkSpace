<?php
    require_once "ClassPeple03.php";
    class PeopleMan extends People{
        public function calcPeopleWight(){
            return round(($this->int_Height-80)*0.7);
        }

    }


?>