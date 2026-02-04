<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" href="styleM2L.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Portail M2L</title>
</head>
<body>
<!-- MAIN -->
<div class="m2l-main" >
	
	<div class ="m2l-content m2l-head"><a href="index.html"><h3>ACCUEIL M2L</h3></a></div>

	<ul class="m2l-navbar">
		 <li><a class="m2l-hover-light-blue" href="crosl.html">Le CROSL</a></li>
		 <li><a class="m2l-hover-light-blue" href="dept.php">Les Ligues</a></li>
 		<li><a class="m2l-hover-light-blue" href="contact.html">Contact</a></li>
	</ul>
	<br/>
	<br/>

	
<?php
		$dep_id = $_GET['dep'];
		require_once("AccesBD.php");
		$dep_id = $_GET['dep'];
		$connexion = connection();
			
		$dept = afficheDepartementNom($connexion);

			
	?> 

	<!-- titre de la page -->
	<div class ="m2l-content m2l-light-grey">
		<h1>Les ligues de <?php echo $dept['nom']; ?>  </h1>
	</div>
	
	<!-- contenu à définir -->
	<div class ="m2l-content">
		<table class="m2l-table">
		<?php
	
			
			$ligues = afficheLigueNomPresident($connexion,$dep_id); 
			foreach ($ligues as $ligue) {
   	 		echo "<tr>";
    		echo "<td>".$ligue['nom']."</td>";
    		echo "<td>".$ligue['president']."</td>";
    		echo "<td><a href='details.php?ligue=".$ligue['nom']."'><img src = 'img/door.jpg'></a></td>";
    		echo "</tr>";
			}

			
    	?>	
			 
		</table>
	</div>
	
	<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Aéromodélisme</h3>
      <p>José Genser</p>
      <p><a href='details.php?ligue=aeromodelisme'><img src='img/door.jpg'/></a></p>
    </div>
    <div class="col-sm-4">
      <h3>Aéronautique</h3>
      <p>Philippe Muller</p>
	  <p><a href='details.php?ligue=aeronautique'><img src='img/door.jpg'/></a></p>
    </div>
    <div class="col-sm-4">
      <h3>Aviron</h3>        
      <p>Gérard Rettien</p>
      <p><a href='details.php?ligue=aviron'><img src='img/door.jpg'/></a></p>
    </div>
  </div>
</div>
	
	<!-- barre horizontale -->
	<div class ="m2l-content">
		<hr/>
	</div>
	
	<!-- contenu à définir -->
	<div class ="m2l-content">	
	</div>

	<footer class="m2l-footer">	
	<p><em>Site de la Maison des Ligues de Lorraine </em> - <b>@M2L</b></p>	
	</footer>
	
</div> <!-- fin MAIN -->
</body>
</html>