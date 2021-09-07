<?php

    $num_files = rand(10,20);

    $file_dir = "./files/";

    if (!file_exists($file_dir)) {
        mkdir($file_dir, 0774, true);
    }

    $n = 1;

    $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMN';

    $bytes = 0;

    while ($n <= $num_files )
    {   
        $file_name = $file_dir.rand().".txt";

        $repetitions = round(rand(1000,5000) / 50);

        $file_data = str_repeat(str_shuffle($string), $repetitions);

        $file = fopen($file_name, "w+b");
        
        fwrite($file, $file_data);
        
        $bytes =+ filesize($file_name);

        fclose($file);   

        $n++;
    }
    
    echo "# Files: $num_files <br> Bytes Written: $bytes"


?>