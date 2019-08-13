<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/googlemap.js"></script>
	<style type="text/css">
		.container {
			height: 700px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data, #allData {
			display: none;
		}
		ul {
    width: 70%;
    margin: auto;
}
	</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <div class="navigation">
                <div>
				                            <a href="http://garbagecollectionsystem.herokuapp.com/index.php">
                                <h3 align="center" ><span>GARBAGE </span>KOLLECTORZ</h3>
                            </a>
                    <div class="navbar-collapse collapse">
                        <div  class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/index.php" class="active">Dashboard</a></li>
                                <li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/customers_view.php">Customers</a></li>
                                <li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/bookings_view.php">Bookings</a></li>
                                <li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/trucks_view.php">Truck</a></li>
                                <li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/slots_view.php">Slots</a></li>
								<li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/availability_view.php">Availability</a></li>
								<li role="presentation"><a href="http://garbagecollectionsystem.herokuapp.com/routes_view.php">Routes</a></li>
					       </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
</head>
<body>
	<div class="container">
		<?php
require 'education.php';
$edu = new education;
$coll = $edu->getCollegesBlankLatLng();
$coll = json_encode($coll, true);
echo '<div id="data">' . $coll . '</div>';

$allData = $edu->getAllColleges();
$allData = json_encode($allData, true);
echo '<div id="allData">' . $allData . '</div>';
?>
		<div id="map"></div>
	</div>
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1bF3Ry-gVyKmSVse4s1zmfnyd4_9b3F8&callback=loadMap">
</script>
</html>
