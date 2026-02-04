<?php 
define('serveur','localhost'); 
define('nom','root'); 
define('passe',''); 
define('base','m2l'); 
$connexion=mysqli_connect(serveur,nom,passe,base); 
if (!$connexion) 
{ 
 echo "La connexion a échouée !"; 
} 

?> 
