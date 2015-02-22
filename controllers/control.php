<?php

include("system/db/conn.php"); //istruzioni di connessione
include_once("models/Modello.php");//classi del modello
include_once("models/Login.php");
include_once("models/Gallery.php");

class Controllo
{
    // attributi
    private $modello;
	private $login;
	private $gallery;

	//costruttore    
	public function __construct()
    {
        $this->modello = new Modello();
		$this->login = new Login();
    }

    //funzione invoke
	public function invoke()
 	{
	$ruolo =  null;
	$comando = null;
	$messaggio = "";
	if(!isset($_REQUEST["comando"])) 
  		{
	    $_REQUEST["comando"]= "start";
	  	}

	$comando = $_REQUEST["comando"];

	$ruolo = $this->login->getlogin();     // chiamata al metodo login, assegnamento del ruolo
	

	if ($comando == "logout") //se viene passata la richiesta di logout
  	{
		$this->login->logout(); //accesso al metodo della classe login
		$ruolo =  null;
		$messaggio = $this->login->message;
		header ("location: index.php");

	}	


	elseif ($comando == "start")
	{

		//controllo della variabile ruolo, per accesso alle pagine private
		switch ($ruolo) {
			case "adm": //funzionalità riservate al ruolo amministratore
				$elenco = $this->modello->selectAttori();
				include("view/paginaadmin.php");
				break;
		
			case "user": //funzionalità riservate al ruolo utente registrato
				$elenco = $this->modello->selectAttori();
				include("view/paginaattori.php");		
				break;

			default:
				$messaggio = $this->login->message;
				include("view/paginainiziale.php");
				break;
		}
	}

	elseif ($comando == "regista")
	{
		include("view/paginabiog.php");	
	}

	elseif ($comando == "filmografia")
	{
		include("view/paginafilms.php");	
	}

	elseif ($comando == "links")
	{
		include("view/paginalinks.php");	
	}

	elseif ($comando == "istruzioni")
	{
		include("view/paginaistruzioni.php");	
	}
	
	elseif ($comando == "me")
	{
		include("view/paginaautore.php");	
	}

	elseif ($comando == "transaction")
	{
		$messaggio = $this->modello->updateDescription();
		$elenco = $this->modello->selectAttori();		
		include("view/paginaadmin.php");	
	}
/*		
 	$cmdAjax = null;
$data = new Immagine();
	if(!isset($_REQUEST["cmdAjax"]))
	{
		//$data = $this->gallery->getImage(0);
		//$messaggio = $this->login->message;
		include_once ("view/ajaxgallery.php");
	}

	elseif(isset($_REQUEST["cmdAjax"])) //se il comando è ricevuto
	{
	  	$cmdAjax = $_REQUEST["cmdAjax"];
	}
	switch ($cmdAjax) {
			case "nextImg":
				$int = filter_var($request["id"]);
				if(!isset($int)){				
				$int = 0;
				}
				$int++;
				$data = $this->gallery->getImage($int);
				include_once ("view/ajaxgallery.php");
				break;
		
			case "prevImg":
				$int = filter_var($request["id"]);
				if(!isset($int)){				
				$int = 0;
				}
				$int--;
				$data = $this->gallery->getImage($int);
				include_once ("view/ajaxgallery.php");
				break;

			}

*/				
		

}
}

?>
