<?php

$file = "example.txt";

    if($handle = fopen($file, 'w')) {
        fwrite($handle, 'Yes, I was able to write the file!');
        fclose($handle); 
    } else {
        echo "The file could not be written";
    }

?>