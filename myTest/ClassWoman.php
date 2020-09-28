<?php
    require_once 'ClassMan.php';
    class PeopleWoman extends PeopleMan{
        public function calcPeopleWight(){
            if($this->int_Age <= 16){
                //呼叫父類別函式
                parent::calcWeight();
            }else{
                
                if($this->str_Sex == "Man"){
                    return round(($this->int_Height-80)*0.7);
                }
                else{
                    return round(($this->int_Height-70)*0.6);
                }

            }

        }


    }


?>