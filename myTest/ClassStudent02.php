<?php
    class Student{
        public $int_Id; 
        public $str_Name; 
        public $str_Sex;
        const title = "學生資料";
        //靜態屬性，由所有呼叫的物件所共有
        static public $countNum = 0;
        
        function __construct($Name)
        {
            echo "***建立{$Name}物件開始，物件數+1***<br>";
            Student::$countNum++;
        }
        function __destruct()
        {
           Student::$countNum--;
           echo "****，物件數-1，當前物件數 : ".Student::$countNum."<hr>" ; 
        }  

        function setData($Id,$Name,$Sex){
            $this->int_Id = $Id;
            $this->str_Name = $Name;
            $this->str_Sex = $Sex;
        
         }
         function showData(){
            echo "座號 : ".$this->int_Id."<br>";
            echo "姓名 : ".$this->str_Name."<br>";
            echo "性別 : ".$this->str_Sex."<br>";
            //在自己類別中取常數用::self 
            echo "****".$this->str_Name.self::title."結束!****<br>";
         }
         static function showEndMsg($Msg){
             return $Msg;
         }

}
    

?>