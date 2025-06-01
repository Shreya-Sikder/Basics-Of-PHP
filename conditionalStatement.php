<?php
//age check example
/* 
$age = 16;
if ($age > 0) {
    if ($age >= 18) {
        echo "Adult";
    } else {
        echo "Minor";
    }

}
else {
    echo "Invalid age.";
}
*/

// Grade classification example
/*$marks = 55;
if ($marks >= 40) {
    if ($marks >= 80) {
        echo "A+";
    } else if ($marks >= 60) {
        echo "B+";
    } else if ($marks >= 50) {
        echo "C+";
    } else {
        echo "D+";
    }
}

 else {
    echo "Fail";
}*/
echo "<br>";
echo "Switch case example<br>";
$marks = 5;
switch($marks){
    
        case ($marks>= 80):
            echo "A+";
            break;
    
    default:
        echo "Fail";
        
}
?>