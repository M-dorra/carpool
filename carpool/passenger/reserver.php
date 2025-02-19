<?php
$m = mysqli_connect('localhost', 'root', '', 'covoiturage');  

// Get the input values
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$date = $_GET["date"];
$from = $_GET["from"];
$to = $_GET["to"];
$nbr = $_GET["nbr"];
$login = $_GET["login"];

// Fetch the user ID of the person making the reservation
$sql = "SELECT num_uti FROM compte WHERE login='$login'";
$result = mysqli_query($m, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $reserver_num_uti = $row['num_uti'];
} else {
    echo '<p class="error-message">Invalid login.</p>';
    exit;
}

// Fetch the trip details
$sql = "SELECT num_uti, num_trajet FROM trajet WHERE ville_depart_trajet='$from' AND ville_arrivee_trajet='$to' AND date_trajet='$date'";
$result = mysqli_query($m, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $num = $row['num_uti'];
    $n = $row['num_trajet'];
} else {
    echo '<p class="error-message">Trip not found.</p>';
    exit;
}

// Check if the user has already reserved the trip
$sql = "SELECT * FROM reserver WHERE reserver_num_uti='$reserver_num_uti' AND num_trajet='$n'";
$result = mysqli_query($m, $sql);
if (mysqli_num_rows($result) > 0) {
    echo '<p class="reserved">Already reserved!</p>';
} else {
    // Insert the reservation
    $f = "INSERT INTO reserver(reserver_num_uti, num_uti, num_trajet, nb_place_reserve) VALUES('$reserver_num_uti', '$num', '$n', '$nbr')";
    $result = mysqli_query($m, $f);
    if ($result) {
        echo '<p class="success-message">Reservation successfully added!</p>';
    } else {
        echo '<p class="error-message">Failed to insert reservation data: ' . mysqli_error($m) . '</p>';
    }

    // Update the trip to indicate it is reserved
    $sql = "UPDATE trajet SET is_reserved = 1 WHERE num_trajet='$n'";
    mysqli_query($m, $sql);
}

mysqli_close($m);
// $m = mysqli_connect('localhost','root','','covoiturage');  
// $nom=$_GET["nom"] ;

// $prenom=$_GET["prenom"] ;
// $date=$_GET["date"] ;
// $from=$_GET["from"] ;
// $to=$_GET["to"] ;
// $nbr=$_GET["nbr"] ;
// $login=$_GET["login"] ;
// $sql="SELECT  num_uti, num_trajet FROM trajet WHERE ville_depart_trajet='".$from."' AND ville_arrivee_trajet='".$to."'
// AND date_trajet='".$date."'";
// $result = mysqli_query($m,$sql);
// while($row=mysqli_fetch_assoc($result)){
// $num= $row['num_uti'];
// $n= $row['num_trajet'];
// }

// $sql="
// UPDATE trajet
// SET is_reserved = 1
// WHERE num_trajet = '".$n."' ";
// $result = mysqli_query($m,$sql);

// $sql="SELECT  num_uti, num_trajet FROM reserver WHERE num_uti='".$num."' AND num_trajet='".$n."'";
// $result = mysqli_query($m,$sql);
// if (mysqli_num_rows($result) > 0)  {
    
//     echo '<p class="reserved">Already reserved !</p>';
// } else {

// $f="INSERT INTO reserver(reserver_num_uti,num_uti,num_trajet,nb_place_reserve) VALUES('".$login."','".$num."','".$n."','".$nbr."')";
// $result= mysqli_query($m,$f);
// if ($result) {
//     // Success message
//     echo '<p class="success-message">Reservation successfully added!</p>';
// } else {
//     // Error handling for insert query
//     echo '<p class="error-message">Failed to insert reservation data: ' . mysqli_error($m) . '</p>';
// }
// }



?>