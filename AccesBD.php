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
    
    
    $dept= mysqli_query($connexion, $sql);

    return $dept;
}

function ajoutLigue($nom,$president,$mail,$telephone,$adresse,$olympique,$id_dep){
    $connexion = connection();

    $sql = "INSERT INTO ligue (nom, president, mail, telephone, adresse, olympique, id_dep) 
            VALUES('$nom','$president','$mail','$telephone','$adresse','$olympique',$id_dep)";
    
    $ajoutLigue = mysqli_query($connexion,$sql);
    
    return $ajoutLigue;
}

?>
