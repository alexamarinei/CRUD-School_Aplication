<html>
<head>
<title>Insereaza Elev</title>
</head>
<style>
body {
    background-image:    url(img/background.jpg);
    background-repeat:no-repeat;
    background-size:cover;
	background-color: #060814;
}

.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;margin:100px auto;}
.tg td{vertical-align: middle;font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{vertical-align: middle; text-align:center; font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;
border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#c6c9d1;}
.tg .tg-baqh{text-align:center;vertical-align:top}
.tg .tg-mb3i{background-color:#f0f1f3;text-align:right;vertical-align:top}
.tg .tg-lqy6{text-align:right;vertical-align:top}
.tg .tg-6k2t{vertical-align: middle; background-color:#f0f1f3;vertical-align:top}
.tg .tg-6k3t {vertical-align: middle; background-color:#f0f1f3;vertical-align:top; color: #c6c9d1}
.tg .tg-yw4l{vertical-align:top}

.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #8a2a21;
	-webkit-box-shadow: 3px 4px 0px 0px #8a2a21;
	box-shadow: 3px 4px 0px 0px #8a2a21;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24437));
	background:-moz-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-webkit-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-o-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:-ms-linear-gradient(top, #c62d1f 5%, #f24437 100%);
	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24437',GradientType=0);
	background-color:#c62d1f;
	-moz-border-radius:18px;
	-webkit-border-radius:18px;
	border-radius:18px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:5px 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24437), color-stop(1, #c62d1f));
	background:-moz-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-webkit-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-o-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:-ms-linear-gradient(top, #f24437 5%, #c62d1f 100%);
	background:linear-gradient(to bottom, #f24437 5%, #c62d1f 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24437', endColorstr='#c62d1f',GradientType=0);
	background-color:#f24437;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>
<body>
<form action="insereazaElevOp.php" method="get">
<table class="tg" style="margin: 10px auto;">
<?php

$servername = "localhost";
$username = "root";

$password = "";
$dbname = "aibd";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select  *  from Elev";
$result = $conn->query($sql);

	$URLS= array();
    while($row = $result->fetch_assoc()) {
 $URLS[] = array('idElev' => $row['idElev'],'nume' => $row['nume']);
	}
echo "<tr>";
echo '<th class="tg-baqh" colspan="2" >Inserare Elev</th>';
echo "</tr>";
echo "<tr>";
echo '<td class="tg-6k2t">Nume</td>';
echo '<td class="tg-6k2t"><input type="text" name="nume" size="40"><br></td>';
echo "</tr>";
echo "<tr>";
echo '<td class="tg-6k2t">Prenume</td>';
echo '<td class="tg-6k2t"><input type="text" name="prenume" size="40"><br></td>';
echo "</tr>";
echo "<tr>";
echo '<td class="tg-6k2t">Cnp</td>';
echo '<td class="tg-6k2t"><input type="text" name="cnp" size="40"><br></td>';
echo "</tr>";
echo "<tr>";
echo '<td class="tg-6k2t">Adresa</td>';
echo '<td class="tg-6k2t"><input type="text" name="adresa" size="40"><br></td>';
echo "</tr>";
echo "<tr>";
echo '<td class="tg-6k2t">Telefon</td>';
echo '<td class="tg-6k2t"><input type="text" name="telefon" size="40"><br></td>';
echo "</tr>";
echo "<tr>";
echo '<td><a href="index.php" class="myButton">Anuleaza</a></td>';
echo '<td><center><input class="myButton" type="submit" value="Insereaza"></center></td>';
echo "</tr>";
?>
</table>   
</form>
</body>
</html>