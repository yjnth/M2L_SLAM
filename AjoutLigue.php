</html> 
<html> 
<head> 
</head> 
<body> 
<?php 
require("connexion.php"); 


$NOM=$_POST['NOM']; 
$president =$_POST['president']; 
$mail= $_POST['mail']; 
$telephone=$_POST['telephone'];
$adresse =$_POST['adresse']; 
$olympique=$_POST['olympique'];
$id_dep=$_POST['id_dep'];
$req="insert into ligue (nom, president, mail, telephone, adresse, olympique, id_dep) 
values('$NOM','$president','$mail','$telephone','$adresse','$olympique',$id_dep)";
$resultat=mysqli_query($connexion,$req); 

if ($resultat) echo "Ajout effectué"; 
else echo "Ajout non effectué !"; 
?> 
</body> 
</html>