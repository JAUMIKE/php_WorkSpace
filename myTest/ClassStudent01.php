<?php

    
    class Student{
        var $int_Id;
        var $str_Name;
        var $str_Sex;
        var $int_Chinese;
        var $int_English;
        var $int_Maths;

        private $total_score; //總分
        private $avarage_score; //平均分

        private function totalScores(){
            return $this->int_Maths + $this->int_Chinese + $this->int_English;
        }
        private function averageScores(){
            return round($this->totalScores()/3);
        }

        public function __construct($Name)
        {
            echo "****{$Name}物件初始化開始****<br>";
        }
        
        public function __destruct()
        {
            echo "*****執行結束*****<br>";
        }
        public function setData($Id,$Name,$Sex,$ChineseScore,$EnglishScore,$MathScore){
            $this->int_Id = $Id;
            $this->str_Name = $Name;
            $this->str_Sex = $Sex;
            $this->int_Chinese =$ChineseScore;
            $this->int_English = $EnglishScore;
            $this->int_Maths = $MathScore;
        }
        
        
        
        public function showData(){
            echo "座號 : ".$this->int_Id."<br>";
            echo "姓名 : ".$this->str_Name."<br>";
            echo "性別 : ".$this->str_Sex."<br>";
            echo "國文成績 : ".$this->int_Chinese."<br>";
            echo "英文成績 : ".$this->int_English."<br>";
            echo "數學成績 : ".$this->int_Maths."<br>";
            echo "總分 : ".$this->totalScores()."<br>";
            echo "平均分 : ".$this->averageScores()."<br>";
        }
    }

?>