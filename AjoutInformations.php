</html> 
<html> 
<head> 
</head> 
<body> 
<?php 
require("connexion.php"); 
/*$Id_info=$_POST['Id_info'];*/ 

$NOM=$_POST['NOM']; 
$president =$_POST['president']; 
$mail= $_POST['mail']; 
$telephone=$_POST['telephone'];
$adresse =$_POST['adresse']; 
$olympique=$_POST['olympique'];
$id_ligue=$_POST['id_ligue'];

$resultat=mysqli_query($connexion,"insert into informations values('$NOM','$president','$mail','$telephone','$adresse','$olympique','$id_ligue')"); 
if ($resultat) echo "Ajout effectué"; 
else echo "Ajout non effectué !"; 
?> 
</body> 
</html>