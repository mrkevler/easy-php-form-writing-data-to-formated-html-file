<?php
//code by MRKEVLER. Check more on GitHub.com at https://github.com/mrkevler
$var1 = $_POST["name"]; //Gets data from the form
$var2 = $_POST["surname"]; //Gets data from the form
$file = fopen('list.html', 'a')or die("can't open file"); //Mode 'a' opens your html file and places cursor at the end of it.
$alldata = "<p>".$var1. " " .$var2."</p>". PHP_EOL; //This statement contains also formating for the output file
fwrite($file , $alldata); //Function writes given content to a file
fclose($file ); //Close the file
die(header("Location: ".$_SERVER["HTTP_REFERER"]));

?>
