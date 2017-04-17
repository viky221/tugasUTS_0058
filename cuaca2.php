<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>	MY FORECAST APP</title>
	<link rel="stylesheet" type="text/css" href="http://nyekrip.com/demo/nyekrip-template-website-responsive-nyekrip/style/reset.css" />
	<link rel="stylesheet" type="text/css" href="http://nyekrip.com/demo/nyekrip-template-website-responsive-nyekrip/style/style.css" />
	<link rel="stylesheet" type="text/css" href="http://nyekrip.com/demo/nyekrip-template-website-responsive-nyekrip/style/media-queries.css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>
	
<body id="home">
	<div id="wrapper">
	<header>
			<h1><a href="index.php">MY FORECAST APP</a></h1>
			<h2>My Forecast App <span>-</span> Applications Weather Forecasts For Semarang city</h2>
			<nav>
				<a href="index.php">Home</a>
				<a href="cuaca2.php">weather forecast today</a>
				<a href="prakiraan.php">weather forecasts for the next seven days</a>
				<a href="profile.php">Profile</a>
				<div class="clearfix"></div>
			</nav>	
		</header>
		
<body id="home">
	<div id="wrapper">
<?php
   

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/mugassari.json");   
    $json_b = json_decode($json_string);
	

        
    $lokasi  = $json_a->{"current_observation"}->{"display_location"}->{"city"};
    $lokasi2 = $json_a->{"current_observation"}->{"observation_location"}->{"city"};
    $lokasi3 = $json_a->{"current_observation"}->{"observation_location"}->{"country"};
	$local_time = $json_a->{"current_observation"}->{"local_time_rfc822"};
	$wind =  $json_a->{"current_observation"}->{"wind_kph"};
    
	

    $month  = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
    $day    = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
	$weekday = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};
    $year   = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
    $cndtn  = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
    $icon   = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
    $temp   = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
	$temp1  = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"high"}->{"celsius"};
    
    

        
    echo "<h3>${lokasi} ${lokasi2} City , ${lokasi3} \n</h3>";
    echo "$local_time\n";
    echo "<br>";
    echo "${cndtn} and wind degrees ${wind} kph \n";
    echo "<br>";
    echo "<img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'><br/>";
    echo "<h3>${temp} F/ ${temp1}C\n</h3>";
	echo "<br>";
	echo "Information :";
    echo "<br>";
    echo "On the ${local_time} weather in ${lokasi} ${lokasi2} ${cndtn} and temp ${temp}F| ${temp1}C with ${wind} wind degrees";
   
    
	

?>
</div> <!-- END Wrapper -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</body>
</html>
