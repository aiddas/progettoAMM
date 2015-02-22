<!DOCTYPE html>
<html>
  
	<head>
		<title>Tarantino Cast - Attori</title>
		<meta charset="utf-8"/>
		<meta name="keywords" content="TARANTINO, MOOVIE, FILM, WESTERN, CULT">
		<meta name="description" content= "Progetto Amm 2013/14, more info in file info.txt">
		<meta name="author" content= "Andrea Iddas 48124">
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<style type="text/css"></style>
		<!--<base href="/img/">-->
		<link rel="stylesheet" type="text/css" href="./public/css/stile.css">
		<script type="text/javascript">
			$(document).ready()function(){
			$("#next-img").click(function(){
				$.ajax({
					url: "index.php?cmdAjax=nextImg",
					data:{
						url: $("#id-url").attr("value"),
						id: $("#img-url").attr("src")
					},
					dataType: 'json',
					success : function(data){
						changeNews(data);
					},
					error : function(data, state){
					}
				})
			});

			$("#prev-img").click(function(){
				$.ajax({
					url: "index.php?cmdAjax=prevImg",
					data:{
						url: $("#id-url").attr("value"),
						id: $("#img-url").attr("src")
					},
					dataType: 'json',
					success : function(data){
						changeNews(data);
					},
					error : function(data, state){
					}
				})		
			});

			function changeNews(data){
				$("#img-url").attr("src", data.url);
				$("#img-id").attr("value", data.id);
				
			}
			});
		</script>
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
            <a href="#">Home</a>
    		<a href="#">Tarantino</a>
    		<a href="#">Administrator</a>
     		<a href="#">About</a>
        </div>
        </div>
        <div id="contentliquid"><div id="contentwrapper">
        <div id="content">


<h2> Gallery Prova</h2>
<div id="gallery">
	
	<p>
	<input type ="hidden" value="<?//=$data->getId(); ?>" name="img-id" id ="img-id"/>
	<img id="img-url" class="img-url" src="<?//= $data->getUrl()?>" alt="New image"/>
	
	</p>

</p>
<div class="btn-group">
<button id="prev-img">Prev</button>
<button id="next-img">Next</button>
</div>

<p> &nbsp; </p>
<p>

</p>
<p> <a href="index.php">
    Vai alla pagina iniziale </a> </p>
</div>
		
        </div></div>

        <div id="leftcolumnwrap">
        <div id="leftcolumn">
          <a href="index.php?comando=mostracatalogo">AttoriCatalogo</a><br /><br />
          <a href="index.php?comando=mostracarrello">CarrelloAttrici</a><br /><br />
       		<a href="#">Comparse</a><br /><br />
      		<a href="#">Location</a><br /><br />
          </div>
        </div>

	
        

	<div id="footerwrap">
        <div id="footer">
            <p>Autore: Andrea Iddas, Progetto Amministrazione di sistema 2013/14, <a href="#">Validator</a></p>
        </div>
        </div>
    </div>
</body>
</html>

