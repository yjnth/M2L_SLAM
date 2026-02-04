<?php
function connection(){
    $connexion = mysqli_connect("localhost", "root", "", "m2l");

    if (!$connexion){
        echo "La connexion a échouée !";
    }

    return $connexion;
}















function afficheDepartementNom($connexion) {
    
	$dep_id = $_GET['dep'];
	$result_dept = mysqli_query($connexion, "SELECT nom FROM departement WHERE id_departement = $dep_id");
	$dept = mysqli_fetch_assoc($result_dept);   
    
    return $dept;

}

function afficheLigueNomPresident($connexion,$dep_id) {
    $result_ligues = mysqli_query($connexion, "SELECT nom, president FROM ligue WHERE id_dep = $dep_id");
    $ligues= [];
    while ($ligue = mysqli_fetch_assoc($result_ligues)) {
        $ligues[] = $ligue;
       	
    }
    return $ligues;
}

?>
