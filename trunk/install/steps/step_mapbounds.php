<?php
// Process input
$def_values = $_SESSION['config']['gmap']['bounds'];
if (is_method_post()) {
	$step_result = 'auto';
	$def_values = array_merge($def_values, $_POST);
	
	// Validation
	foreach(array('min_latitude', 'min_longitude', 'max_latitude', 'max_longitude') as $field) {
		if (empty($def_values[$field]) || !is_numeric($def_values[$field]) || ($def_values[$field] < -180)) {
			show_error("Please select an area on the map.");
			$step_result = false;
			break;
		}
	}
	
	if ($step_result) {
		$_SESSION['config']['gmap']['bounds'] = $def_values;
	}
	
}

// Show form on GET and POST(error)
if ((!is_method_post()) || !$step_result){
	$step_result = false;
?>

<p class="description">Hold down <strong>shift</strong> and select the area of all wireless networks that this installation will handle.
</p>
<div id="map_canvas"></div>
<form method="post">
	<input type="hidden" name="min_latitude" value="<?php echo $def_values['min_latitude']; ?>">
	<input type="hidden" name="min_longitude" value="<?php echo $def_values['min_longitude']; ?>">
	<input type="hidden" name="max_latitude" value="<?php echo $def_values['max_latitude']; ?>">
	<input type="hidden" name="max_longitude" value="<?php echo $def_values['max_longitude']; ?>">
	<div class="buttons">
		<input class="continue" type="submit" value="Continue">
	</div>
</form>

<script>

// Render selection box on map
function selection_box(bounds) {
	// Remove previous
	if (typeof(rect) != 'undefined') {
		rect.setMap(null);
	}
	rect = new google.maps.Rectangle({
		bounds : bounds,
		clickable: false,
		map: map,
		strokeColor: 'red'
	});
}

var myLatlng = new google.maps.LatLng(-34.397, 150.644);
var myOptions = {
  zoom: 8,
  center: myLatlng,
  mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
var initial_bounds = new google.maps.LatLngBounds(
		new google.maps.LatLng(
			parseInt(document.getElementsByName('min_latitude')[0].value),
			parseInt(document.getElementsByName('min_longitude')[0].value)
		),
		new google.maps.LatLng(
			parseInt(document.getElementsByName('max_latitude')[0].value),
			parseInt(document.getElementsByName('max_longitude')[0].value)
		));
selection_box(initial_bounds);
map.fitBounds(initial_bounds);

// simple drag zoom 
map.enableKeyDragZoom(

	{	key: "shift", 
		boxStyle: { border: "thin solid black", backgroundColor: "transparent", opacity: 1},
		paneStyle: { backgroundColor: "gray", opacity: 0.4 }
	}
);

// Handle selection event
google.maps.event.addListener(map.getDragZoomObject(), 'dragend', function (bnds) {
	document.getElementsByName('min_latitude')[0].value = bnds.getSouthWest().lat();
	document.getElementsByName('min_longitude')[0].value = bnds.getSouthWest().lng();
	document.getElementsByName('max_latitude')[0].value = bnds.getNorthEast().lat();
	document.getElementsByName('max_longitude')[0].value = bnds.getNorthEast().lng();
	selection_box(bnds);	
});

</script>
<?php 
}

return $step_result;