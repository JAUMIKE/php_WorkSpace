<?php
    class People{
        public $str_Name;
        public $str_Sex;
        protected $int_Age;
        protected $int_Weight;
        protected $int_Height;

        public function setData($Name,$Sex,$Age,$Weight,$Height){
            $this->str_Name = $Name;
            $this->str_Sex = $Sex;
            $this->int_Age = $Age;
            $this->int_Height = $Height;
            $this->int_Weight = $Weight;
        }    
        public function calcWeight(){
            return ($this->int_Age*2)+8;
        }
    }

?>