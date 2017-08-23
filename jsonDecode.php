<?php

// retrieving json data from a file
$json_read = file_get_contents("d://jsonArrayAccidentForm.json");
$json_dec = json_decode($json_read, true);


// printing json data
// echo $json_dec;
// echo '======================================'
// echo $json_dec['']['formdata_basicInfoActivity'];


$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json_read, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        // echo "$key:\n";
    } else {
        echo "$key => $val";
        echo "<br>";
    }
}


//session_start();
//include('db_config.php');

//mysql_query("INSERT INTO tb_bus_logger VALUES ('','$myArray[0]','$myArray[1]','$myArray[2]','$myArray[3]','$myArray[4]')");
//mysql_close($bd);
?>