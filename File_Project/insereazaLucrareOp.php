<html>
<head>
<meta charset="utf-8">
<meta http-equiv='refresh' content='5;url=afisareLucrare.php'>
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

</style>
<body class="php">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aibd";

$idLucrare = $_GET['idLucrare'];
$numeLucrare = $_GET['numeLucrare'];
$nota = $_GET['nota'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql ="insert into Lucrare(nume,numar_credite) values('$numeLucrare','$nota')";
	$conn->exec($sql);
   echo '<table class="tg" style="margin: 10px auto";>';
   echo "<tr>";
   echo '<td class="tg-6k2t">Operatiunea de inserare s-a executat cu succes !In scurt timp veti fi redirectionat catre pagina principala.</td>';
   echo "</tr>";
   echo "</table>";
    }
catch(PDOException $e)
    {
   echo '<table class="tg" style="margin: 10px auto";>';
   echo "<tr>";
   echo '<td class="tg-6k2t">S-a produs o eroare.Inserarea nu a reusit.In cateva secunde veti fi redirectionat.</td>';
   echo "</tr>";
   echo "</table>";  
   echo  $e;
    }
?>
</body>
</html>