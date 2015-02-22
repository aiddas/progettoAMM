<?php

class Immagine {
	private $url;
	private $id;

	public function __construct() {
	}


 	public function setId($id){
		$this->id = $id;
	}

	public function getId(){
		return $this->id;
	}	
 	public function setUrl($url){
		$this->url = $url;
	}

	public function getUrl(){
		return $this->url;
	}


}
?>
