<?php
    $url = "http://www.url.net/file.zip";
    $file = "file.zip";
    $esc = escapeshellarg($url);
    exec("wget " . $esc);

//use ur extension and remove the //comments
    //$shell = "tar -xzvf $file"; //tar
    //$shell = "unzip $file"; //zip

    $shell = escapeshellcmd($shell);
    exec($shell,$nu);

//del file
    $del = "rm $file";
    $del = escapeshellcmd($del);
    exec($del,$nu);
    print_r("done");
?>
