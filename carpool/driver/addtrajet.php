<?php


// $m = mysqli_connect('localhost', 'root', '', 'covoiturage'); 
// $from = $_GET["from"];
// $to = $_GET["to"];
// $datevo = $_GET["datevo"];
// $duree = $_GET["duree"];
// $dist = $_GET["distance"];
// $heure = $_GET["heure"];
// $etat = $_GET["etat"];
// $prix = $_GET["prix"];
// $comm = $_GET["commentaire"];
// $etape = isset($_GET["etape"]);
// $frome = $_GET["frome"];
// $toe = $_GET["toe"];
// $heuret = $_GET["heuret"];
// $prixe = $_GET["prixe"];
// $login = $_GET["login"];
// $pickup = $_GET["heurepick"];

// $reqlog = "select num_uti from compte where login='".$login."'";
// $res = mysqli_query($m, $reqlog);

// if (mysqli_num_rows($res) == 0) {
//     header("Location: add-ride.php?error=Invalid login");
//     exit();
// } else {
//     $log = mysqli_fetch_row($res);
//     $uid = $log[0];

//     $columns = "num_uti, ville_depart_trajet, heure, distance, durree, date_trajet, etat_trajet, prix, ville_arrivee_trajet";
//     $values = "$uid, '$from', '$heure', $dist, '$duree', '$datevo', '$etat', $prix, '$to'";

//     if (!empty($pickup)) {
//         $columns .= ", heure_pickup";
//         $values .= ", '$pickup'";
//     }

//     if (!empty($comm)) {
//         $columns .= ", commentaire";
//         $values .= ", '$comm'";
//     }

//     $insert_trajet = "INSERT INTO trajet ($columns) VALUES ($values)";
//     $res_trj = mysqli_query($m, $insert_trajet);
//     $trj_id = mysqli_insert_id($m);

//     if ($etape && !empty($frome) && !empty($toe) && !empty($heuret) && !empty($prixe)) {
//         $insert_etape = "INSERT INTO etape (num_trajet, ville_depart_trajet, heure, prix, ville_arrivee) 
//                          VALUES ($trj_id, '$frome', '$heuret', $prixe, '$toe')";
//         $rs_et = mysqli_query($m, $insert_etape);
//     }

//     header("Location: conducteurhome.php?login=".$login."");
//     exit();
// }

// mysqli_close($m);

$m = mysqli_connect('localhost', 'root', '', 'covoiturage'); 
$from = $_GET["from"];
$to = $_GET["to"];
$datevo = $_GET["datevo"];
$duree = $_GET["duree"];
$dist = $_GET["distance"];
$heure = $_GET["heure"];
$etat = $_GET["etat"];
$prix = $_GET["prix"];
$comm = $_GET["commentaire"];
$etape = isset($_GET["etape"]);
$frome = $_GET["frome"];
$toe = $_GET["toe"];
$heuret = $_GET["heuret"];
$prixe = $_GET["prixe"];
$login = $_GET["login"];
$pickup = $_GET["heurepick"];

$reqlog = "select num_uti from compte where login='".$login."'";
$res = mysqli_query($m, $reqlog);

if (mysqli_num_rows($res) == 0) {
    // header("Location: add-ride.php?error=Invalid login");
    echo '<p class="error-message">Login incorrect !</p>';
    exit();
} else {
    $log = mysqli_fetch_row($res);
    $uid = $log[0];

    $columns = "num_uti, ville_depart_trajet, heure, distance, durree, date_trajet, etat_trajet, prix, ville_arrivee_trajet,is_reserved";
    $values = "$uid, '$from', '$heure', $dist, '$duree', '$datevo', '$etat', $prix, '$to',0";

    if (!empty($pickup)) {
        $columns .= ", heure_pickup";
        $values .= ", '$pickup'";
    }

    if (!empty($comm)) {
        $columns .= ", commentaire";
        $values .= ", '$comm'";
    }

    $insert_trajet = "INSERT INTO trajet ($columns) VALUES ($values)";
    $res_trj = mysqli_query($m, $insert_trajet);
    $trj_id = mysqli_insert_id($m);

    if ($etape && !empty($frome) && !empty($toe) && !empty($heuret) && !empty($prixe)) {
        $insert_etape = "INSERT INTO etape (num_trajet, ville_depart_trajet, heure, prix, ville_arrivee) 
                         VALUES ($trj_id, '$frome', '$heuret', $prixe, '$toe')";
        $rs_et = mysqli_query($m, $insert_etape);
    }

    header("Location: conducteurhome.php?login=".$login."");
    exit();
}

mysqli_close($m);
// $m=mysqli_connect('localhost','root','','covoiturage'); 
// $from=$_GET["from"];
// $to=$_GET["to"];
// $datevo=$_GET["datevo"];
// $duree=$_GET["duree"];
// $dist=$_GET["distance"];
// $heure=$_GET["heure"];
// $etat=$_GET["etat"];
// $prix=$_GET["prix"];
// $comm=$_GET["commentaire"];
// $etape=isset($_GET["etape"]);
// $frome=$_GET["frome"];
// $toe=$_GET["toe"];
// $houret=$_GET["heuret"];
// $prixe=$_GET["prixe"];
// $login=$_GET["login"];
// $pickup=$_GET["heurepick"];





// $reqlog="select num_uti from compte where login='".$login."'";
// $res=mysqli_query($m,$reqlog);
// if (mysqli_num_rows($res) == 0) {
   
//     header("Location: add-ride.php?error=Invalid login");
//     exit();
// } else {
// $log=mysqli_fetch_row($res);
// $uid=$log[0];


// //////////////////////////////////////

// $insert_trajet=
// "insert into trajet
// (num_uti,ville_depart_trajet,heure,distance,durree,date_trajet,heure_pickup,etat_trajet,commentaire,prix,ville_arrivee_trajet)
// values
// (".$uid.",'".$from."','".$heure."',".$dist.",'".$duree."','".$datevo."','".$pickup."','".$etat."','".$comm."',".$prix.",'".$to."')";
 
// $res_trj=mysqli_query($m,$insert_trajet);
// $trj_id=mysqli_insert_id($m);

// //////////////////////////////////////

// if($etape){

// $insert_etape="insert into etape (num_trajet,ville_depart_trajet,heure,prix,ville_arrivee)values($trj_id,'".$frome."','".$houret."',".$prixe.",'".$toe."')";
// $rs_et=mysqli_query($m,$insert_etape);
	
// }

// header("Location: conducteurhome.php?login=".$login."");
// exit;


// }

// mysqli_close($m);
?>