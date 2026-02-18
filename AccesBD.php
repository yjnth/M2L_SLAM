<?php
function connection(){
    $connexion = mysqli_connect("localhost", "root", "", "m2l");

    if (!$connexion){
        echo "La connexion a échouée !";
    }

    return $connexion;
}

function details($id){
    $connexion = connection();

    $sql = "SELECT nom, president, mail, telephone, adresse, olympique
            FROM ligue
            WHERE nom = '$id'";

    $details = mysqli_query($connexion, $sql);

    return $details;
}

function dept(){
    $connexion = connection();

    $sql = "SELECT nom,id_departement 
            FROM departement";
    
    
    $dept = mysqli_query($connexion, $sql);

    return $dept;
}

function ajoutLigue($nom,$president,$mail,$telephone,$adresse,$olympique,$id_dep){
    $connexion = connection();

    $sql = "INSERT INTO ligue (nom, president, mail, telephone, adresse, olympique, id_dep) 
            VALUES('$nom','$president','$mail','$telephone','$adresse','$olympique',$id_dep)";
    
    $ajoutLigue = mysqli_query($connexion,$sql);
    
    return $ajoutLigue;
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

function adherent($id){
    $connexion = connection();
    
    $sql = "SELECT a.nom, a.prenom, a.date_naissance, l.nom AS ligue
            FROM adherent a
            JOIN ligue l ON a.id_ligue = l.id_ligue
            WHERE l.nom = '$id'";


    $adherent = mysqli_query($connexion, $sql);
    
    return $adherent;
}
  
function menuDeroulantDepartement ($connexion) {
	$resultat=mysqli_query($connexion,"SELECT  DISTINCT ligue.id_dep, departement.nom AS nom_departement
    FROM ligue, departement WHERE departement.id_departement = ligue.id_dep");

    $departement = [];
    while ($row=mysqli_fetch_assoc($resultat)) {
        $departements[] = $row;
    }
    mysqli_free_result($resultat);
    return $departements;
	
}


?>
