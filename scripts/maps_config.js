var marker;
function initialize() {
	var mapProp = {
		center:myCenter,
		zoom:15,
		panControl:true,
		zoomControl:true,
		mapTypeControl:true,
		scaleControl:true,
		streetViewControl:true,
		overviewMapControl:true,
		rotateControl:true,
		scrollwheel: false,
		navigationControl: false,
		draggable: true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker=new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
	});
	marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);