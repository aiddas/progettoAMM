
<?php
include("system/db/conn.php");

//la classe Login permette la validazione dalla tabella utenti e l'assegnazione del ruolo
class Login 
{
	private $ruolo;
	public $message = " ";
       
	public function __construct()
	{  
	   $this->ruolo = null; 
    }

	public function getlogin()
	{
	if (isset($_SESSION['role'])) //se la sessione è attiva
	{
		$this->ruolo = $_SESSION['role'];
	}
	// confronto tra variabili del form login e tabella utenti database

	elseif(isset($_REQUEST['username']) && isset($_REQUEST['password'])){

	$usr= mysql_real_escape_string($_POST["username"]); //preleva username, con escape caratteri anti sql Injection

	$pwd= mysql_real_escape_string(md5($_POST["password"])); //pw criptata con metodo md5

	//selezione campi da database, tabella utenti	
	$query = "SELECT ID, user, role FROM utenti WHERE user= '{$usr}'  AND pass= '{$pwd}'";

	$Result = mysql_query ($query);
	if (!$Result) //query non riuscita
	{
		die ("tabella inesistente" .mysql_error());
	}

	if(mysql_num_rows($Result) ==1) //controlla se la query ha estratto una riga
	{
	//ricerca a buon fine
		$find =mysql_fetch_array ($Result);
		$_SESSION['ID'] = $find['ID']; //preleva l'ID relativo all'utente
		$_SESSION['user'] = $find['user'];
		$_SESSION['role'] = $find['role'];

		$this->ruolo = $_SESSION['role'];

	}
    
	else {
		$this->message = "Utente o Password errata!";
	}
	}

	return $this->ruolo;
	}

	public function logout()
	{
		// cancella la sessione attiva
		$_SESSION = array();
		session_destroy();
		// messaggio di conferma
		$this->message = "Sei uscito!";
	}


}

?>

