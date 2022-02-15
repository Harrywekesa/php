<?php
echo  readfile("siji");
echo "<br>";

$myfile = fopen("siji2","r") or die("Unable to open the file");
echo fread($myfile,filesize("siji2"));
fclose($myfile);
