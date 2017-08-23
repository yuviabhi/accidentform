<?php
include('db_config.php');
?>
<!DOCTYPE html>
<html>
    <head>
      <title>Accident Management</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
      
      <!-- Bootstrap -->
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	  
	   <script type="text/javascript">
	 
		var map;
		var center = new google.maps.LatLng("22.3149","87.3105");
		
		function init() {
			//alert("ok");
		var mapOptions = {
		zoom: 14,
		center: center,
		mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		
		}     
		
		
	
	</script>
   </head>
   
   <body onload="init();">
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!--<script src = "https://code.jquery.com/jquery.js"></script> -->
      <script src = "js/jquery.js"></script>
	  <script src = "page_js/customjs.js"></script>
      <script src = "js/bootstrap.min.js"></script>
	  
	  
	  <div class="container">
	  <div class="jumbotron">
		<h1>Accident Management</h1>    
		
	  </div>
	  
		
		<div class="row">
		  <div class="col-sm-4">
		  
		  
			<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Accident Reference No.
			  <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			  
			  <?php
			  
				$sql = "SELECT Reference_Number FROM accident_information order by Reference_Number";
				$result=mysql_query($sql);
				$num=@mysql_numrows($result);
				$i=0;
				while ($i < $num) {
					?>
					<li><a href="#"><?php echo mysql_result($result,$i,"Reference_Number")?></a></li>
					<?php
					$i++;
				}			  
					?>
			  </ul>
			  
			</div>
			<br/>
			<input type="TextBox" ID="txt_acc_ref_no" Class="form-control" disabled ></input>
			<br/>
			<button id="btnClr" name="btnClr" class="btn btn-default" onclick="clear()">Clear All</button>
			
		  </div>
		  <div class="col-sm-8">
		  
		  
		  <?php
			//include('getMap.php');
		  ?>
		  
		  
		  <section id="main">
            <div id="map_canvas" style="width: 100%; height: 250px;"></div>
        </section>
		  
		  
		  
		  
		</div>

	  
	</div>
	
	<div class="row">
		
		<div class="col-sm-12">
		  
		  <br/>
		  <div id="responsecontainer" align="center">
		  
		  
		  
		  </div>
		  
		</div>

	
	</div>
	  
	  
	   
<?php
mysql_close($bd);

?>
	  
<script type="text/javascript">

var btnClr = document.getElementById('btnClr');

btnClr.onclick = function(){
	//alert("aa");
	//$('#txt_acc_ref_no').clear();
	document.getElementById("txt_acc_ref_no").value = "";
	document.getElementById("responsecontainer").innerHTML ="";
	document.getElementById("map_canvas").innerHTML ="";
	init();
	//$('#googleMap').remove();
		

}


</script> 
	  
	  
      
   </body>
</html>