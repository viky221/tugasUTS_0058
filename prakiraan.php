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
		
<h2>The weather forecast for the next seven days</h2>
	
<?php
    require 'cuaca1.php';
?>
<?php
echo "<h1> </h1>";
echo "<hr>";
echo "<table width = 980 border =1  >
<tr>
<td align=center>Day</td>
<td align=center>  $haria   </td>
<td align=center>  $harib   </td>
<td align=center>  $haric  </td>
<td align=center>  $harid  </td>
<td align=center>  $harie  </td>
<td align=center>  $harif </td>
<td align=center>  $harig  </td>
</tr>
<tr>
<td align=center> Date </td>
<td align=center> $tgla, $blna $thna </td>
<td align=center> $tglb, $blnb $thnb </td>
<td align=center> $tglc, $blnc $thnc </td>
<td align=center> $tgld, $blnd $thnd </td>
<td align=center> $tgle, $blne $thne </td>
<td align=center> $tglf, $blnf $thnf </td>
<td align=center> $tglg, $blng $thng </td>
</tr>
<tr>
<td align=center>Condition</td>
<td align=center>$cndtn1</td>
<td align=center>$cndtn2</td>
<td align=center>$cndtn3</td>
<td align=center>$cndtn4</td>
<td align=center>$cndtn5</td>
<td align=center>$cndtn6</td>
<td align=center>$cndtn7</td>
</tr>

<tr>
<td align=center>Temperature </td>
<td align=center>$temp1 C / $temp_f1 F</td>
<td align=center>$temp2 C / $temp_f2 F</td>
<td align=center>$temp3 C / $temp_f3 F</td>
<td align=center>$temp4 C / $temp_f4 F</td>
<td align=center>$temp5 C / $temp_f5 F</td>
<td align=center>$temp6 C / $temp_f6 F</td>
<td align=center>$temp7 C / $temp_f7 F</td>
</tr>

<tr>
<td align=center>Wind degrees</td>
<td align=center>$wind1</td>
<td align=center>$wind2</td>
<td align=center>$wind3</td>
<td align=center>$wind4</td>
<td align=center>$wind5</td>
<td align=center>$wind6</td>
<td align=center>$wind7</td>
</tr>

<tr>
<td align=center>Icon</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon1 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon2 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon3 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon4 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon5 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon6 . ".gif'></td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon7 . ".gif'></td>
<tr>
</table>";
?>
	</div> <!-- END Wrapper -->
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</body>
</html>