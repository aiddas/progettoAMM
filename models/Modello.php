<?php
  
	include_once("models/Attore.php");
    include('system/db/dbconn.php');
  
	//la classe Modello, si occupa di accedere al database e operare sulla tabella attori
    class Modello
    {
    	public $messaggio;
       
    	public function __construct()
       {  
           $messaggio = ""; 
       }
  
  		//selezione dalla tabella attori e storaggio su array di tutti i dati
		public function selectAttori()
	   {

			$mysqli=dbconn::connectDb();
			$elenco =  array();
			$query="SELECT * FROM attori";
			$risultati= $mysqli->query ($query);

			while($row= $risultati->fetch_object()){

				$actor = new Attore();
     			$actor->nome=$row->nome;
     			$actor->descrizione=$row->descrizione;
				$elenco[] = $actor;
			
	   		}
		//chiusura della connessione
		$mysqli->close();
		return $elenco;
       }



       //transazione di aggiornamento cast
		public function updateDescription()
		{
							
				if(isset($_REQUEST['actor']))
			{		
				$mysqli=dbconn::connectDb();
				$actor =($_POST["actor"]); //preleva dal form
				$description =($_POST["description"]);
				$newactor =($_POST["newactor"]);
				$mysqli->autocommit(false);
				$query = "DELETE FROM attori WHERE nome = '{$actor}' LIMIT 1";		//cancella attore selezionato	
//				$query = "UPDATE attori SET descrizione = '{$description}' WHERE nome = '{$actor}'";

				$risultato = $mysqli->query ($query);
				if($mysqli->errno >0){
					error_log ("Query non riuscita $mysqli->errno : $mysqli.>error", 0);
					$this->messaggio = "err cancellazione attore";
				}
				if( $mysqli->affected_rows >0)
				{
				//"SELECT nome FROM attori WHERE nome = '{$newactor} IN
				$query = "SELECT * FROM attori WHERE disponibile =1";
				$Result = $mysqli->query ($query);
				if($Result->num_rows !=0)
				//if($mysqli->num_rows >0) //controlla se la query ha estratto una riga
				//{errore attore gia presente nel cast o attualmente impegnato}
				{
				$mysqli->rollback();
				$mysqli->close();				
				$this->messaggio = "Aggiornamento non riuscito!Attore gia presente nel cast o attualmente impegnato";
				}

				else
				{
					$query= "INSERT INTO attori SET nome = '{$newactor}', descrizione = '{$description}'";
					$mysqli->commit();
					$mysqli->autocommit(true);
					$mysqli->close();	
					$this->messaggio = "Aggiornamento riuscito!";
				}
				}

			return $this->messaggio;
}
		}		

     
  }
?>
