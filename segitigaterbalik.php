<?php
 $ukr=(int)readline("masukkan ukuran segitiga : ");
    for ($i = $ukr; $i >= 1; $i--)
    {
        //perulangan untuk memberi ruang di segitiga
        for ($ruang = $i; $ruang < $ukr; $ruang++)
            echo " ";

        //perulangan untuk memberi bintang di segitiga
        for ($j = 1; $j <= 2 * $i - 1; $j++)
        {
            if ($i == $ukr || $j == 1 || $j == 2 * $i - 1)
                echo "*";
            else
                echo  " ";
        }
        echo "\n";
    }