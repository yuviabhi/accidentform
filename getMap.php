
		<?php
			include('db_config.php');
			$acc_ref_no="";
			if(isset($_POST["acc_ref_no"]))
				{
				$acc_ref_no=$_POST["acc_ref_no"];
				}

				$query="select * from collision_information where Reference_Number = '$acc_ref_no'";
				$result=@mysql_query($query);
				$num=@mysql_numrows($result);
				$i=0;
				$f0=mysql_result($result,$i,"Reference_Number");
				$f1=mysql_result($result,$i,"Latitude");
				$f2=mysql_result($result,$i,"Longitude");
				//echo $f0; 
			

echo "$f1";
echo ",";
echo "$f2";


?>