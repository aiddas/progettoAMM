<!DOCTYPE html>

<html>
	<head>

		<title>Tarantino Cast- People</title>

		<meta charset="utf-8"/>

		<meta name="keywords" content="TARANTINO, MOOVIE, FILM, WESTERN, CULT">

		<meta name="description" content= "Progetto Amm 2013/14, more info in file info.txt">

		<meta name="author" content= "Andrea Iddas 48124">

		<style type="text/css"></style>

		<link rel="stylesheet" type="text/css" href="./public/css/stile.css">

	</head>



	<body>

    	<div id="page">

    	    <div id="headerwrapper">
        		<div id="header">
            		<h1>Tarantino Cast</h1>
	        	    <h2>i protagonisti del prossimo moovie</h2>
				</div>
        	</div>

	        <div id="navwrapper">
		        <div id="nav">
		            <a href="index.php">Home</a>
		    		<a href="index.php?comando=istruzioni">Istruzioni</a>
		    		<a href="index.php?comando=me">Autore</a>
		        </div>
        	</div>

	    	<div id="contentliquid">
				<div id="contentwrapper">
					<!-- contenuto -->
			        <div id="content">
						<h2> Attori Protagonisti </h2>
						<article>
<var>
	<?php echo ("Benvenuto ".$_SESSION['user']); ?> </var>
	<br /><br />
	<p>In quanto utente registrato puoi visualizzare il cast completo di 
	<h4>The Hateful Eight </h4></p>
<?php foreach ($elenco as $a): ?>
   <ul>
   <li> <?= $a->nome ?> </br> <?= $a->descrizione ?> 
   </li></ul>
   </p>
      <?php endforeach ?>  
        


</article>
<p>
<a href="index.php?comando=logout"> Esegui il Logout</a>
</p>
        		</div>	
	        </div>
		</div>

        <div id="leftcolumnwrap">
			<!-- menu sinistro -->
	        <div id="leftcolumn">
				<ul>
		        <li><a href="index.php?comando=gallery">Gallery</a></li>
		        <li><a href="index.php?comando=regista">Tarantino</a></li>
	       		<li><a href="index.php?comando=filmografia">Films</a></li>
	      		<li><a href="index.php?comando=links">Links</a></li>
				</ul>
	        </div>
		</div>

		<div id="footerwrap">
        	<div id="footer">	
	            <p>Autore: Andrea Iddas, Progetto Amministrazione di sistema 2013/14, <a href="http://validator.w3.org/check/referer">Validator Html</a></p>
        	</div>
    	</div>

    </div>

</body>

</html>

