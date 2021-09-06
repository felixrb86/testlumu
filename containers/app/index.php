<?php
    echo "Hola 2"; die();
    $num_files = rand(10,20);

    $file_dir = "./files/";

    $n = 1;

    $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMN';

    $size = 0;
    $bytes = 0;

    while ($n <= $num_files )
    {   
        $file_name = $file_dir.rand().".txt";

        $repetitions = round(rand(1000,5000) / 50);

        $file_data = str_repeat(str_shuffle($string), $repetitions);

        $file = fopen($file_name, "w+b");
        
        fwrite($file, $file_data);
        
        $size =+ strlen($file_data);
        $bytes =+ filesize($file_name);

        fclose($file);   

        $n++;
    }
    
    echo "# Files: $num_files <br> Sizes: $size <br> Bytes Written: $bytes"


?>