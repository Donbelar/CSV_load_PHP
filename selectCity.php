<?php

$filename = "la_poste_hexamal.csv";
$postal = $_POST["post_code"];

//echo $postal."<br />\n";

if (($handle = fopen($filename, "r")) !== FALSE) {

    while (($data = fgetcsv($handle, 1024, ";")) !== FALSE) {

        if ($data[2] == $postal){
            echo $data[1]."<br />\n";
        }
    }
    echo "How about???";
    fclose($handle);
}

?>