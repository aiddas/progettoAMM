<!DOCTYPE html>

<html>
	<head>

		<title>Tarantino Cast - Home</title>

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

						<h3>Divertiti ad indovinare il cast scelto da QT per il suo prossimo capolavoro.</h3>
						<article>
						<h4>Scegli fra i suoi protagonisti preferiti, scorri la gallery sulla sinistra. </h4>
							 					
						<h3> <?php  echo $messaggio;?> </h3>

	   					<p> Per continuare esegui il <STRONG>LOGIN</STRONG> </p>
						<!-- form per il login -->
	   					<div id="input-form">
							<form action="index.php?comando=start" method="POST">
								<p>
									<label>Username</label>
									<input id="username" name="username" type="text" required="required"/>
									<br>
								</p>

								<p>
									<label>Password</label>
									<input id="password" name="password" type="password" required="required"/>
								</p>
 								
								<p>
  									<button type="submit" name="submit"><span>Login</span></button>
								</p>
							</form>
								
	    				</div>
						<br/>

	   					<p><img title="QT" alt="Foto di Q. Tarantino" src="./public/img/Quentin-Tarantino.jpg" width="300" height="140"></p>
<article>
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

