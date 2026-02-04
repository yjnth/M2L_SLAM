<?php
require_once("AccesBD.php");
$connexion = connection();

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" media="screen" href="styleM2L.css" type="text/css" />
	<title>Portail M2L</title>
</head>

<body>
	<!-- MAIN -->
	<div class="m2l-main">

		<div class="m2l-content m2l-head"><a href="index.html">
				<h3>ACCUEIL M2L</h3>
			</a></div>

		<ul class="m2l-navbar">
			<li><a class="m2l-hover-light-blue" href="crosl.html">Le CROSL</a></li>
			<li><a class="m2l-hover-light-blue" href="dept.html">Les Ligues</a></li>
			<li><a class="m2l-hover-light-blue" href="contact.html">Contact</a></li>
		</ul>
		<br />
		<br />

		<!-- titre de la page -->
		<div class="m2l-content m2l-light-grey">
			<h1>Les départements de la M2L</h1>
		</div>

		<!-- contenu à définir -->
		<div class="m2l-content">
			<table class="m2l-table">
				<?php
				$res = mysqli_query($connexion, "SELECT NOM,id_departement FROM departement;");
				while ($row = mysqli_fetch_assoc($res)) {
					echo "<tr>
							<td>
								<a class='m2l-hover-green' href='ligue.php?dep={$row['id_departement']}'>
								 Ligues de {$row['NOM']}
								<a/>
							<td/>
						<tr/>";
				}
				?>
			</table>
		</div>

		<!-- barre horizontale -->
		<div class="m2l-content">
			<hr />
		</div>

		<!-- contenu à définir -->
		<div class="m2l-content">
		</div>

		<footer class="m2l-footer">
			<p><em>Site de la Maison des Ligues de Lorraine </em> - <b>@M2L</b></p>
		</footer>

	</div> <!-- fin MAIN -->
</body>

</html>