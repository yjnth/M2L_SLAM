<?php
require_once("AccesBD.php");
$connexion = connection();
?>

</html> 
<html> 
<head> 
</head> 
<body> 
<?php
$nom       = $_POST['nom']; 
$president = $_POST['president']; 
$mail      = $_POST['mail']; 
$telephone = $_POST['telephone'];
$adresse   = $_POST['adresse']; 
$olympique = $_POST['olympique'];
$id_dep    = $_POST['id_dep'];

$ajoutLigue = ajoutLigue($nom,$president,$mail,$telephone,$adresse,$olympique,$id_dep);

if ($ajoutLigue) echo "Ajout effectué"; 
else echo "Ajout non effectué !"; 
?> 
</body> 
</html>