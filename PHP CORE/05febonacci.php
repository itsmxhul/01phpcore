<?php
function fibo($n){
    if($n<=1){
    return $n;}
    else{
        return (fibo($n-1)+fibo($n-2));
    }	
    }
    
    for ($i=0;$i<10;$i++){
    echo fibo($i).", ";
    }

?>