<html>
	<head>
	<title>MY WEATHER APP</title>
	<h2>In Semarang City Weather Forecast For Seven Days Ahead</h2>
	</head>
	
	<body>
	
<?php
    require 'prakiraan2.php';
?>
<?php
echo "<h1> </h1>";
echo "<hr>";
echo "<table width = 1350 border =1  >
<tr>
<td align=center>Information</td>
<td align=center>  Day 1   </td>
<td align=center>  Day 2   </td>
<td align=center>  Day 3   </td>
<td align=center>  Day 4   </td>
<td align=center>  Day 5   </td>
<td align=center>  Day 6   </td>
<td align=center>  Day 7   </td>
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
	<br></br>
	<form action="Index.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Selesai"/>
	</form>
</html>