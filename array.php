<?php
//array
    //old style
    $arr1 = array("Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samtag", "Sonntag");
    //new style
    $arr2 = ["Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samtag", "Sonntag"];


    //echo for string/int only, usue var_dump instead
    // var_dump($arr1);
    // echo"<br/>";
    // print_r($arr2);
    // echo"<br/>";
    // echo $arr2[1];


//plan 1
    for($i = 0; $i < count($arr2); $i++){
        echo $arr2[$i] ."<br/>";
    }

echo"<br/>";

//plan 2

foreach($arr2 as $day){
    echo $day ."<br/>";
}
?>