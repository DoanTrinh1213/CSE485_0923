<?php 
    $array =[12,5,200,10,125,60,90,345,-123,100,-125,0];
     foreach($array as $values){
        if($values >=100 && $values <= 200 && $values %5==0 ){
            $newvalues[]= $values;
            echo $values . "; ";
        }
     }
?>