<?php $myfile = fopen("web.txt", "r");
while (!feof($myfile)) {
    echo fgetc("$myfile");
}
