<?php
    //v1
    function showStar($count,$tyr="*"){
        if($count > 21){
            echo '$count<=21 please ';
            return; 
        }
        
        if($count <=0){
            echo '$count > 0 please';
            return;
        }
        $result = "";
        for($i = 1;$i<=$count; $i++){
            $result.= $tyr;
        }
        echo $result; 
    }
    //v2
    // function showStar($count,$tyr="*"){
    //     $result = "";
    //     if($count >= 22 || $count < 0 || $count == 4 ){
    //         echo "please set num >0 and num <=21 !=4"; //待改進
    //     }else{
    //         for($i = 1;$i<=$count; $i++){

    //             $result.= $tyr;
    //             // echo $result;
    //             // echo "<br>";
    //         }
    //         echo $result;
          
    //     }
      
    // }
    showStar(4,"$");
    echo "<hr>"

?>