<?php
class Calculator{
    public function mult($num1,$num2){
        return $num1*$num2;
    }
    public function factorial($num){
        $factorial = 1;  
        if($num>=0 && is_int($num)){
            for ($i=$num; $i>=1; $i--){  
                $factorial = $factorial * $i;}  
               }else{
                 $factorial=null;
               }    
          return $factorial;
           }

}
?>