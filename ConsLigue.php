<html> 
<body> 
<div align="center"> 
<h1>Interrogation de la table ligue</h1> 
<?php 
require("connexion.php"); 
$resultat=mysqli_query($connexion ,"select * from ligue"); 
if ($resultat) 
{ 
 echo "<h2>Contenue de la table ligue</h2><br><br>\n"; 
 echo "<u>in_ligue</u> <u>Nom</u><br>\n"; 
 // Lecture du curseur contenant les lignes résultantes de la requête 
 $ligue=mysqli_fetch_assoc($resultat); 
 while ($ligue) { 
 echo "$ligue[id_ligue] $ligue[nom] <br>\n"; 
 $ligue=mysqli_fetch_assoc($resultat); 
 } 
 // Libération de l’espace mémoire occupé par le cursseur 
 mysqli_free_result($resultat); 
} 
else echo "requête non exécutée correctement !"; 
?> 
</div> 
</body> 
</html> 
