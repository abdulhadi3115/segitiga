<html>
<head>
			<title>.:: Hasil Perhitungan Luas Segi Tiga ::.</title>
</head>
<body>
<font face=verdana>
<center>
<h3><u>Luas Segitiga</u></h3>
</center>
<form action=contoh2_4.php method=post>
<?
	$luas=0.5*$alas*$tinggi;
	echo "<table align=center bgcolor=#cedadc bordercolor=#cfdbdd cellpadding=0>";
	echo "<tr>";
	echo "<td>Alas</td>";
	echo "<td>:</td>";
	echo "<td>$alas</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Tinggi</td>";
	echo "<td>:</td>";
	echo "<td>$tinggi</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Luas Segi Tiga</td>";
	echo "<td>:</td>";
	echo "<td>$luas</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan=3 align=center><input type=submit value=ulang></td>";
	echo "</tr>";
	echo "</table>";
?>
</form>
</body>
</html>
