<?php
// Connexion à la base
$connexion = new mysqli("localhost", "root", "", "m2l");

if ($connexion->connect_error) {
    echo("Erreur connexion : " . $connexion->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_ligue  = $_POST['id_ligue'];
    $NOM       = $_POST['NOM'];
    $president = $_POST['president'];
    $mail      = $_POST['mail'];
    $telephone = $_POST['telephone'];
    $adresse   = $_POST['adresse'];
    $olympique = $_POST['olympique'];
    $id_dep    = $_POST['id_dep'];

    $stmt = $connexion->prepare(
        "UPDATE ligue 
         SET NOM = ?, president = ?, mail = ?, telephone = ?, adresse = ?, olympique = ?, id_dep = ?
         WHERE id_ligue = ?"
    );

    // s = string | i = int
    $stmt->bind_param(
        "ssssssii",
        $NOM,
        $president,
        $mail,
        $telephone,
        $adresse,
        $olympique,
        $id_dep,
        $id_ligue
    );

    $stmt->execute();

    header("Location: ListeLigues.php");
    exit();
}


$id_ligue = $_GET['id'] ?? null;

if (!$id_ligue) {
    echo("ID de ligue manquant");
}

$stmt = $connexion->prepare(
    "SELECT NOM, president, mail, telephone, adresse, olympique, id_dep
     FROM ligue WHERE id_ligue = ?"
);
$stmt->bind_param("i", $id_ligue);
$stmt->execute();

$result = $stmt->get_result();
$ligue = $result->fetch_assoc();

if (!$ligue) {
    die("Ligue introuvable");
}
?>

<form method="POST">
    <input type="hidden" name="id_ligue" value="<?= $id_ligue ?>">

    <label>Nom</label>
    <input type="text" name="NOM" value="<?= htmlspecialchars($ligue['NOM']) ?>" required>

    <label>Président</label>
    <input type="text" name="president" value="<?= htmlspecialchars($ligue['president']) ?>">

    <label>Email</label>
    <input type="email" name="mail" value="<?= htmlspecialchars($ligue['mail']) ?>">

    <label>Téléphone</label>
    <input type="text" name="telephone" value="<?= htmlspecialchars($ligue['telephone']) ?>">

    <label>Adresse</label>
    <input type="text" name="adresse" value="<?= htmlspecialchars($ligue['adresse']) ?>">

    <label>Olympique</label>
    <input type="text" name="olympique" value="<?= htmlspecialchars($ligue['olympique']) ?>">

    <label>Département</label>
    <input type="number" name="id_dep" value="<?= $ligue['id_dep'] ?>">

    <button type="submit">Modifier</button>
</form>

