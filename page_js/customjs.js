$(document).on('click', '.dropdown-menu li a', function() {
    //alert("hi");
	$('#txt_acc_ref_no').val($(this).html());
	
	  $.ajax({    //create an ajax request to getData.php
        type: "POST",
        url: "getData.php",   
		data: {
                acc_ref_no: $("#txt_acc_ref_no").val()
            },		
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
	
	$.ajax({    //create an ajax request to getMap.php
        type: "POST",
        url: "getMap.php",   
		data: {
                acc_ref_no: $("#txt_acc_ref_no").val()
            },		
        dataType: "text",   //expect text to be returned                
        success: function(response){                    
            
           //alert(response);
			
			var lat = response.substr(0, response.indexOf(',')); 
			var lon = response.substr(response.indexOf(',')+1,response.length); 
			//alert(lat+','+lon);
			newMarker = new google.maps.LatLng(lat, lon);
			init();
			//map.clearOverlays();
            addMarker(newMarker);
			
		   
			}

    });
	
	function addMarker(location) {
        marker = new google.maps.Marker({
            position: location,
            map: map,
			title: $("#txt_acc_ref_no").val()
        });
		map.setCenter(location);
		
		
		
    }
	
	//loadMap();
	
}); 


