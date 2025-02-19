<?php
// $m = mysqli_connect('localhost','root','','covoiturage');  

// $numtrj=$_GET["numtrj"];


// $reqall="DELETE 
// FROM trajet
// WHERE
// num_trajet=".$numtrj."";

// $resall=mysqli_query($m,$reqall) or die(mysqli_error($m));

// header("Location: allrides.php");
// exit;




// mysqli_close($m);

// Establish the connection to the database
$m = mysqli_connect('localhost', 'root', '', 'covoiturage');

// Check if the connection is successful
if (!$m) {
    die("Connection failed: " . mysqli_connect_error());
}

$numtrj = $_GET["numtrj"];

// Check if the trip is reserved
$checkReserved = "SELECT * FROM reserver WHERE num_trajet = $numtrj";
$resCheck = mysqli_query($m, $checkReserved);
if (!$resCheck) {
    die("Error checking reservation: " . mysqli_error($m));
}

// If the trip is reserved, display a message and stop the script
if (mysqli_num_rows($resCheck) > 0) {
    echo "<p>Cannot delete the trip because it is reserved.</p>";
    exit;
}

// If the trip is not reserved, proceed to delete
$deleteTrajet = "DELETE FROM trajet WHERE num_trajet = $numtrj";
$resTrajet = mysqli_query($m, $deleteTrajet);
if (!$resTrajet) {
    die("Error deleting from trajet: " . mysqli_error($m));
}

// Redirect to allrides.php after successful deletion
header("Location: allrides.php");
exit;

// Close the database connection
mysqli_close($m);
?>