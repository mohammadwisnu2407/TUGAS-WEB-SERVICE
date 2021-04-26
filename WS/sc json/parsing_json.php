<?php
 
// membuka file JSON
$file = file_get_contents("http://localhost/ws/sc%20json/data.json");
$json = json_decode($file, true);
 
foreach ($json as $key) {
    if (is_array($key)) {
        foreach ($key as $key => $value) {
            echo $key . ' : ' . $value . '<br />';
        }
    }
}
?>