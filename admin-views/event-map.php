		<div id="googlemaps" style="height: <?php echo $height ?>px; width: <?php echo $width ?>px;"></div>
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<script type="text/javascript">
			  var event_address;
			
			  function initialize() {
				 var myOptions = {
					zoom: 8,
					center: event_address,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				 };
				 var map = new google.maps.Map(document.getElementById("googlemaps"),
					  myOptions);
					  
			    var marker = new google.maps.Marker({
					map: map,
					title: <?php echo json_encode(tribe_get_venue($postId)) ?>,
					position: event_address});
			  }
			  
			  function codeAddress() {
			    var geocoder= new google.maps.Geocoder();
				 var address = <?php echo json_encode($address) ?>;

				 geocoder.geocode( { 'address': address}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						event_address = results[0].geometry.location
					   initialize();
					}
				 });
			  }			  

			  codeAddress();
			</script>