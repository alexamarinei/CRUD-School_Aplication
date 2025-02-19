<html lang="en"><head>
<style type="text/css">
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

.insertButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:20px 56px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
	position:relative;
	margin: 10px auto;
	
}
.insertButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
	background-color:#e9e9e9;
}
.insertButton:active {
	position:relative;
	top:1px;
}

</style>
</head>
<body bgcolor="#808080">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aibd";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select idCorector,nume,prenume,cnp,adresa,telefon from Corector";
$result = $conn->query($sql);

	$URLS= array();
    while($row = $result->fetch_assoc()) {
 $URLS[] = array('idCorector' => $row['idCorector'],'nume' => $row['nume'],'prenume' => $row['prenume'], 'cnp' => $row['cnp'], 'adresa'=> $row['adresa'],'telefon'=> $row['telefon']);
	}
?>

<table class="tg">
<tr>
    <th class="tg-baqh" colspan="8" >Rezultate</th>
  </tr>
  <tr>
  <th class="tg-6k3t">Id Corector</th>
	<th class="tg-6k3t">Nume</th>
	<th class="tg-6k3t">Prenume</th>
	<th class="tg-6k3t">CNP</th>
	<th class="tg-6k3t">Adresa</th>
	<th class="tg-6k3t">Telefon</th>
	<th class="tg-6k3t" colspan="3"></th>
   </tr>

<?php foreach ($URLS as $URL){
	echo'<tr>';
	$idCorector = $URL['idCorector'];
	$numeCorector = $URL['nume'];
	$numeCorector = $URL['nume'];
	$prenumeCorector = $URL['prenume'];
	$cnpCorector = $URL['cnp'];
	$adresaCorector = $URL['adresa'];
	$telefonCorector= $URL['telefon'];
	echo'<td class="tg-6k2t">'.$idCorector."</td>";
	echo'<td class="tg-6k2t">'.$numeCorector."</td>";
	echo'<td class="tg-6k2t">'.$prenumeCorector."</td>";
	echo'<td class="tg-6k2t">'.$cnpCorector."</td>";
	echo'<td class="tg-6k2t">'.$adresaCorector."</td>";
    echo'<td class="tg-6k2t">'.$telefonCorector."</td>";
	echo '<td class="tg-6k2t"><a href="actualizareCorector.php?idCorector='.$idCorector.'&numeCorector='.$numeCorector.'&prenumeCorector='.$prenumeCorector.'&cnpCorector='.$cnpCorector.'&adresaCorector='.$adresaCorector.'&telefonCorector='.$telefonCorector.'" class="myButton">Actualizeaza</a>';
	echo '<td class="tg-6k2t"><a href="stergereCorector.php?idCorector='.$idCorector.'"class="myButton">Sterge</a>';
	echo'</tr>';
	 }
        ?>
</table>
<table style="margin: 10px auto;">
<tr>
  <td><a href="index.php" class="insertButton">Home</a></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <td><a href="insereazaCorector.php" class="insertButton">Insereaza</a></td>
</tr>
</table>  

<?php  
$conn->close();
?>

</body>
</html>