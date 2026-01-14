<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" href="styleM2L.css" type="text/css" />
<title>Portail M2L</title>
</head>
<body>
<!-- MAIN -->
<div class="m2l-main" >
	
	<div class ="m2l-content m2l-head"><a href="index.html"><h3>ACCUEIL M2L</h3></a></div>

	<ul class="m2l-navbar">
		 <li><a class="m2l-hover-light-blue" href="crosl.html">Le CROSL</a></li>
		 <li><a class="m2l-hover-light-blue" href="dept.html">Les Ligues</a></li>
 		<li><a class="m2l-hover-light-blue" href="contact.html">Contact</a></li>
	</ul>
	<br/>
	<br/>
	<?php
	switch($_GET['ligue']){
		case 'aeromodelisme':
			$ligue='Aéromodélisme';
			break;
		case 'aeronautique':
			$ligue='Aéronautique';
			break;			
		case 'aikido':
			$ligue='Aikido';
			break;
		case 'athletisme':
			$ligue='Athlétisme';
			break;
		case 'aviron':
			$ligue='Aviron';
			$prez='Gérard Rettien';
			$mail='gerard.rettien@gmail.com';
			$tel='03.57.28.80.02';
			$port='06.66.20.47.03';
			$adr='5 rue Emile Moitrier - 57050 Metz';
			$olympique=true;
			break;
		case 'badminton':
			$ligue='Badminton';
			break;	
		case 'baseball':
			$ligue='Baseball';
			break;			
	}
	?>

	<!-- titre de la page -->
	<div class ="m2l-content m2l-light-grey">
		<h1>Détails de la ligue <?php echo $ligue; ?></h1>
	</div>
	
	<!-- contenu à définir -->
	<div class ="m2l-content">
		<table class="m2l-table">
			 <tr><td><b>NOM</b></td><td><?php echo $ligue; ?></td></tr>
			<tr><td><b>PRESIDENT</b></td><td><?php echo $prez; ?></td></tr>
			<tr><td><b>MAIL</b></td><td><?php echo $mail; ?></td></tr>
			<tr><td><b>TELEPHONE</b></td><td><?php echo $tel; ?></td></tr>
			<tr><td><b>ADRESSE</b></td><td><?php echo $adr; ?></td></tr>
			<tr><td><b>OLYMPIQUE</b></td><td><?php if($olympique) echo 'oui'; else echo 'non'; ?></td></tr>
			
		</table>
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