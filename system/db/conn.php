 <?php


// Dati connessione al database
$datab_host = 'localhost';        // Host
$datab_utente = 'iddasAndrea';        // Username database
$datab_password = 'tucano790';        // Password database
$datab_name = 'amm14_iddasAndrea';     // nome database mysql

// Effettua la connessione al database
$conn=mysql_connect ($datab_host, $datab_utente, $datab_password);
if (!$conn)
{
    die ("Errore connessione al database " .mysql_error());
}
//apertura database
$database=mysql_select_db($datab_name, $conn);
if (!$database)
{
    die ("Errore connessione al database " .mysql_error());
}


?> 

