<?php
$size=(int)readline("masukkan ukuran segitiga : ");
for($i=0; $i < $size; $i++){ 
    for($j=0;$j<$size - $i -1; $j++){
        echo " ";
    }
    for ($k=0;$k < 2 * $i + 1; $k++){
        if ($i === 0 || $i === $size - 1){
        echo "*";
        }
        else {
            if ($k=== 0 || $k === 2 * $i){
                echo "*";
            }
            else {
                echo " ";
            }
        }
    }
    echo "\n";
} 
?>