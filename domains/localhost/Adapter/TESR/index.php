<?php
$folder = 't1';
if(is_dir($folder)){
    //dh - дескриптор - код для обращения;
    if($dh = opendir($folder)){
        while (($file = readdir($dh)) !==false){
           // echo "file: $file : type" . "/n";
            echo "<li>" . $file . "</li>>";
        }

        closedir($dh);
    }
}

