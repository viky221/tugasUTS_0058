<center> <?php
   

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
    echo "On the ${local_time} weather in ${lokasi} ${lokasi2} ${cndtn} and temp ${temp}F|C with ${wind} wind degrees";
   
    
	

?></center>
<br></br>
	<form action="Index.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Selesai"/>
	</form>
</html>