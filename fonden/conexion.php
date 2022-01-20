 <?php
$mysqli = new mysqli("10.2.43.130", "yazmin", "12345", "fonden"); 
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
mysql_set_charset('utf8');
}
echo $mysqli->host_info . "\n";

$mysqli = new mysqli("10.2.43.130", "yazmin", "12345", "fonden", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
///////////////////En esta parte se decalara utf8 para que no genera error en ñ y acentos ///////////////////////////////////////////////
if (!mysqli_set_charset($mysqli, "utf8")) {
	printf("Error al cargar caracteres utf8:%\n", mysqli_error($mysqli));
	exit();
}
?>
