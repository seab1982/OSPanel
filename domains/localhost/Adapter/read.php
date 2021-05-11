<?php
$d = fopen('test.txt','r'); //$d - дескриптор файла
//fgets -  читает первую строку
echo fgets($d);
//echo fgets($d);
// feof -возвращает true если конец файла достигнут
// и false если конец файла не достигнут
//while (!feof($d )) - определяет достигнут ли конец файла
while (!feof($d )){
      echo "<br>" . fgets($d) . "<br>" ;
}
fclose($d);


