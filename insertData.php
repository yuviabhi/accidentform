<?php
include('db_config.php');
if(isset($_POST["jsonArray"]))
	{
	$jsonArray=$_POST["jsonArray"];
	}

echo $jsonArray;

// saving received json data into a file
$file = 'd://jsonArrayAccidentForm.json';
file_put_contents($file, $jsonArray);

// retrieving json data from a file
$json_read = file_get_contents("d://jsonArrayAccidentForm.json");
$json_dec = json_decode($json_read, true);


// $json_dec = json_decode($file, true);

$i = 0;
$my_array1 = array();		//support for latest android versions

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json_read, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

$referenceNo = "";
$person_no = 0;
$pedestrian_no = 0;
$vehicle_no = 0;

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {			//support for latest android mobiles eg Android 5.0
         echo "$key:";
		 echo "<br>";
		 $my_array1 = $val;
		 
		 if(strpos($key,"formdata_basicInfoActivity") !== false){
				//echo "test";
        		$referenceNo = $my_array1[0];
        		mysql_query("INSERT INTO accident_information VALUES ('$referenceNo','$my_array1[2]','$my_array1[1]','$my_array1[5]$my_array1[4]','$my_array1[3]')");

        } elseif (strpos($key,"formdata_acc_related_factors") !== false){

        	mysql_query("INSERT INTO accident_related_factors VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]','$my_array1[5]','$my_array1[6]','$my_array1[7]')");

        } elseif (strpos($key,"formdata_road_related_factors") !== false){

        	mysql_query("INSERT INTO road_related_factors VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]','$my_array1[5]','$my_array1[6]','$my_array1[7]')");

        } elseif (strpos($key,"formdata_collision_information") !== false){

        	mysql_query("INSERT INTO collision_information VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]')");

        } elseif (strpos($key,"formdata_vehicle_related_factors") !== false){

            $vehicle_no = $vehicle_no + 1;
        	mysql_query("INSERT INTO vehicle_related_factors VALUES ('$referenceNo','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]','$my_array1[5]','$my_array1[6]','$vehicle_no')");

        } elseif (strpos($key,"formdata_person_related_factors") !== false){

            $person_no = $person_no + 1;
        	mysql_query("INSERT INTO person_related_factors VALUES ('$person_no','$referenceNo','$my_array1[2]','$my_array1[3]','$my_array1[5]','$my_array1[1]','$my_array1[6]','$my_array1[7]','$my_array1[8]')");

        } elseif (strpos($key,"formdata_pedestrian_related_factors") !== false){

        	$pedestrian_no = $pedestrian_no + 1;
            mysql_query("INSERT INTO pedestrian VALUES ('$pedestrian_no','$referenceNo','$my_array1[4]','$my_array1[1]','$my_array1[2]','$my_array1[3]')");

        } elseif (strpos($key,"formdata_official_details") !== false){

        	mysql_query("INSERT INTO official_details VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]$my_array1[2]','$my_array1[4]$my_array1[3]','$my_array1[5]','$my_array1[6]')");
         }
		 
    } else {			//support for older android mobiles eg Android 4.1.2
        echo "$key => $val";
        echo "<br>";

        
        $val = str_replace('[',"",$val);
        $val = str_replace(']',"",$val);
        $my_array1 = explode(",", $val);


        if(strpos($key,"formdata_basicInfoActivity") !== false){
				//echo "test";
        		$referenceNo = $my_array1[0];
        		mysql_query("INSERT INTO accident_information VALUES ('$referenceNo','$my_array1[2]','$my_array1[1]','$my_array1[5]$my_array1[4]','$my_array1[3]')");

        } elseif (strpos($key,"formdata_acc_related_factors") !== false){

        	mysql_query("INSERT INTO accident_related_factors VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]','$my_array1[5]','$my_array1[6]','$my_array1[7]')");

        } elseif (strpos($key,"formdata_road_related_factors") !== false){

        	mysql_query("INSERT INTO road_related_factors VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]','$my_array1[2],$my_array1[3]','$my_array1[4]','$my_array1[5]','$my_array1[6]','$my_array1[7]','$my_array1[8]')");

        } elseif (strpos($key,"formdata_collision_information") !== false){

        	mysql_query("INSERT INTO collision_information VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]')");

        } elseif (strpos($key,"formdata_vehicle_related_factors") !== false){

            $vehicle_no = $vehicle_no + 1;
        	mysql_query("INSERT INTO vehicle_related_factors VALUES ('$referenceNo','$my_array1[1]','$my_array1[2]','$my_array1[3]','$my_array1[4]','$my_array1[5]','$my_array1[6]','$vehicle_no')");

        } elseif (strpos($key,"formdata_person_related_factors") !== false){

            $person_no = $person_no + 1;
        	mysql_query("INSERT INTO person_related_factors VALUES ('$person_no','$referenceNo','$my_array1[2]','$my_array1[3]','$my_array1[5]','$my_array1[1]','$my_array1[6]','$my_array1[7]','$my_array1[8]')");

        } elseif (strpos($key,"formdata_pedestrian_related_factors") !== false){

        	$pedestrian_no = $pedestrian_no + 1;
            mysql_query("INSERT INTO pedestrian VALUES ('$pedestrian_no','$referenceNo','$my_array1[4]','$my_array1[1]','$my_array1[2]','$my_array1[3]')");

        } elseif (strpos($key,"formdata_official_details") !== false){

        	mysql_query("INSERT INTO official_details VALUES ('$referenceNo','$my_array1[0]','$my_array1[1]$my_array1[2]','$my_array1[4]$my_array1[3]','$my_array1[5]','$my_array1[6]')");
         }
		 
		


    }
}
	
mysql_close($bd);

?>