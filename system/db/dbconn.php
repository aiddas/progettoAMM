 <?php
include_once ('system/db/Settings.php');


class dbconn {



// Dati connessione al database
//$datab_host = 'localhost';        // Host
//$datab_utente = 'root';        // Username database
//$datab_password = 'davide';        // Password database
//$datab_name = 'amm14_iddasAndrea';     // nome database mysql

private function __construct() {
}
//$mysqli = new mysqli();
// Effettua la connessione al database
//$mysqli->connect ($datab_host, $datab_utente, $datab_password, $datab_name);
//if ($mysqli->connect_errno != 0)
//{
//    $idErrore=$mysqli->connect_errno;
//	$msg=$mysqli->connect_error;
//	error_log("Errore nella connessione al server $idErrore: $msg", 0);
//	echo "Errore nella connessione $msg";
//}

 public function connectDb(){
$mysqli = new mysqli();
$mysqli->connect (Settings::$datab_host, Settings::$datab_utente, Settings::$datab_password, Settings::$datab_name);
if($mysqli->errno != 0){
echo "Connessione fallita: " . die (mysqli_connect_error());
return null;
}else{
return $mysqli;
}
}

}
?> 

