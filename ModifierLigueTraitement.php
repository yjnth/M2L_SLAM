<?php
$conn = new mysqli("localhost", "root", "", "ton_db");

$id_ligue=$_POST['id_ligue'];
$NOM = $_POST['NOM']; 
$president =$_POST['president']; 
$mail= $_POST['mail']; 
$telephone=$_POST['telephone'];
$adresse =$_POST['adresse']; 
$olympique=$_POST['olympique'];
$id_dep=$_POST['id_dep'];

$stmt = $conn->prepare(
    "UPDATE ligue SET NOM = ?, president = ?, mail = ?, telephone = ?, adresse = ?, olympique = ?, id_dep = ?  WHERE id_ligue = ?"
);
$stmt->bind_param("ssi", $NOM, $president, $mail, $telephone,$adresse,$olympique,$id_dep,$id_ligue);
$stmt->execute();


exit();
