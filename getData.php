<?php
include('db_config.php');
$acc_ref_no="";
if(isset($_POST["acc_ref_no"]))
	{
	$acc_ref_no=$_POST["acc_ref_no"];
	}

	$sql = "select * from accident_information where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);

if($num > 0){
echo "<div class='alert alert-success fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Accident Reference No. : $acc_ref_no </strong>
  </div>";
} else {
	echo "<div class='alert alert-danger fade in'>
  <strong>Accident Reference No. : $acc_ref_no not found !</strong>
</div>";
}
echo "<div class='well'>";
echo "<table border='1' class='table '>
<h3>Basic Information</h3>
<thead><tr>
<th align=center> <b>Reference Number</b></th>
<th align=center><b>Police Station</b></th>
<th align=center><b>Place</b></th>
<th align=center><b>Date & Time</b></th>
<th align=center><b>Day of Week</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";
	

$sql = "select * from accident_related_factors where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table '>
<h3>Accident Related Factors</h3>
<thead><tr>
<th align=center> <b>Weather Condition</b></th>
<th align=center><b>Collision Type</b></th>
<th align=center><b>Road Type</b></th>
<th align=center><b>Accident Severity</b></th>
<th align=center><b>No of Vehicles Involved</b></th>
<th align=center><b>No of Persons Involved</b></th>
<th align=center><b>Area Type</b></th>
<th align=center><b>Sub Area Type</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			//echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "<td align=center>$data[6]</td>";
			echo "<td align=center>$data[7]</td>";
			echo "<td align=center>$data[8]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";
	
	
	

$sql = "select * from collision_information where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table'>
<h3>Collision Information</h3>
<thead><tr>
<th align=center> <b>Latitude</b></th>
<th align=center><b>Longitude</b></th>
<th align=center><b>Nearby Landmarks</b></th>
<th align=center><b>Distance from Nearby Landmarks </b></th>
<th align=center><b>Remarks</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			//echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";


$sql = "select * from road_related_factors where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table'>
<h3>Road Related Factors</h3>
<thead><tr>
<th align=center> <b>Carriageway Type</b></th>
<th align=center><b>Junction Type</b></th>
<th align=center><b>Light Condition</b></th>
<th align=center><b>Junction Control</b></th>
<th align=center><b>No of Lanes</b></th>
<th align=center><b>Pedestrian Facilities</b></th>
<th align=center><b>Road_Surface Condition</b></th>
<th align=center><b>Speed_Limit</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			//echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "<td align=center>$data[6]</td>";
			echo "<td align=center>$data[7]</td>";
			echo "<td align=center>$data[8]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";


$sql = "select * from vehicle_related_factors where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table'>
<h3>Vehicle Related Factors</h3>
<thead><tr>
<th align=center> <b>Sl No.</b></th>
<th align=center> <b>Type of Vehicle</b></th>
<th align=center><b>Direction of Travel</b></th>
<th align=center><b>Vehicle Manoeuvere</b></th>
<th align=center><b>Vehicle Defects</b></th>
<th align=center><b>Registration Number</b></th>
<th align=center><b>Age</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			echo "<td align=center>$data[7]</td>";
			echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "<td align=center>$data[6]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";

$sql = "select * from person_related_factors where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table' bgcolor='#00FF00'>
<h3>Person Related Factors</h3>
<thead><tr>
<th align=center> <b>Sl. No.</b></th>
<th align=center> <b>Age</b></th>
<th align=center><b>Sex</b></th>
<th align=center><b>Accident Severity</b></th>
<th align=center><b>Person Class</b></th>
<th align=center><b>Seat Belt Used ?</b></th>
<th align=center><b>Helmet Used ?</b></th>
<th align=center><b>Alcohol Test</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			echo "<td align=center>$data[0]</td>";
			//echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "<td align=center>$data[6]</td>";
			echo "<td align=center>$data[7]</td>";
			echo "<td align=center>$data[8]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";

$sql = "select * from pedestrian where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table'>
<h3>Pedestrian Related Factors</h3>
<thead><tr>
<th align=center> <b>Sl. No.</b></th>
<th align=center> <b>Pedestrian Location</b></th>
<th align=center><b>Age</b></th>
<th align=center><b>Sex</b></th>
<th align=center><b>Accident Severity</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			//echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";

$sql = "select * from official_details where Reference_Number = '$acc_ref_no'";
$result=mysql_query($sql);
$num=@mysql_numrows($result);
echo "<div class='well'>";
echo "<table border='1' class='table'>
<h3>Official Details</h3>
<thead><tr>
<th align=center> <b>FIR No.</b></th>
<th align=center><b>Date of Occurance</b></th>
<th align=center><b>Date of Information Received</b></th>
<th align=center><b>Information Details</b></th>
<th align=center><b>Officer In-Charge</b></th></tr></thead>";

		while($data = mysql_fetch_row($result))
		{
			
			echo "<tr>";
			//echo "<td align=center>$data[0]</td>";
			echo "<td align=center>$data[1]</td>";
			echo "<td align=center>$data[2]</td>";
			echo "<td align=center>$data[3]</td>";
			echo "<td align=center>$data[4]</td>";
			echo "<td align=center>$data[5]</td>";
			echo "</tr>";
			
		}	

echo "</table></div>";
?>