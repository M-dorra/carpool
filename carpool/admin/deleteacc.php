<?php
// $m = mysqli_connect('localhost','root','','covoiturage');  

// $id=$_GET["numuti"];


// $reqall="delete u.* , c.* ,v.*
// from compte c,utilisateur u,vehicule v 
//  where u.num_uti=c.num_uti and c.num_uti=v.num_uti and
// u.num_uti=".$id." and c.num_uti=".$id."";

// $resall=mysqli_query($m,$reqall) or die(mysqli_error($m));

// header("Location: allaccs.php");
// exit;




// mysqli_close($m);

$m = mysqli_connect('localhost', 'root', '', 'covoiturage');

if (!$m) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_GET["numuti"];

// First, delete from the `vehicule` table
$deleteVehicule = "DELETE FROM vehicule WHERE num_uti = $id";
if (!mysqli_query($m, $deleteVehicule)) {
    die("Error deleting from vehicule: " . mysqli_error($m));
}

// Then, delete from the `compte` table
$deleteCompte = "DELETE FROM compte WHERE num_uti = $id";
if (!mysqli_query($m, $deleteCompte)) {
    die("Error deleting from compte: " . mysqli_error($m));
}

// Finally, delete from the `utilisateur` table
$deleteUtilisateur = "DELETE FROM utilisateur WHERE num_uti = $id";
if (!mysqli_query($m, $deleteUtilisateur)) {
    die("Error deleting from utilisateur: " . mysqli_error($m));
}

// Redirect after deletion
header("Location: allaccs.php");
exit;

mysqli_close($m);

?>