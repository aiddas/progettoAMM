<?php

include_once("controllers/control.php");
session_start();
$controllo = new Controllo();
$controllo->invoke();

?>
