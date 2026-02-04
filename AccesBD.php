<?php
function connection(){
    $connexion = mysqli_connect("localhost", "root", "", "m2l");

    if (!$connexion){
        echo "La connexion a échouée !";
    }

    return $connexion;
}


?>
