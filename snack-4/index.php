<?php 

function pincopallo($array,num $num1 , num $num2 ){
    if(!$num1 < $num2){
        return false;
    }elseif(!$num2 <= count($array)){
        return false;
    }else{
        $result=[];
        for($i = $num1; $i<($num2 - $num1); $i++){
            array_push($result,$array[$i])
            return $result
        }
        
    }
}


?>