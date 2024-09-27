<?php
$myfile = fopen("/home/student/ppp.txt", "w") or die("unable to open file!");
$txt = "php exercise\n";
fwrite($myfile, $txt);
$txt = "form\n";
fwrite($myfile, $txt);
$txt = "w3resourses\n";
fwrite($myfile, $txt);
fclose($myfile);
echo "size of the file:" .filesize("/home/student/ppp.txt") ."\n";
?>