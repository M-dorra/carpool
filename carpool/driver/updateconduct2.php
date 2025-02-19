<?php

$m = mysqli_connect('localhost', 'root', '', 'covoiturage') or die(mysqli_error($m));

// Ensure $_GET parameters are set or provide defaults
$login = isset($_GET['login']) ? $_GET['login'] : '';
$newlogin = isset($_GET['newlogin']) ? $_GET['newlogin'] : '';
$pwd = isset($_GET['pwd']) ? $_GET['pwd'] : '';
$s = isset($_GET['sexe']) ? $_GET['sexe'] : ''; 
$name = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$lname = isset($_GET['nom']) ? $_GET['nom'] : '';
$tel = isset($_GET['tel']) ? $_GET['tel'] : '';
$cin = isset($_GET['cin']) ? $_GET['cin'] : '';
$vi = isset($_GET['ville']) ? $_GET['ville'] : '';
$dn = isset($_GET['datenaiss']) ? $_GET['datenaiss'] : '';
$smoke = isset($_GET['fum']) ? $_GET['fum'] : ''; 
$email = isset($_GET['email']) ? $_GET['email'] : '';

$update_user_fields = [];
$update_compte_fields = [];

// Validate login
$query_check_login = "SELECT c.login 
                      FROM compte c 
                      WHERE c.login = '$login'";
$result_check_login = mysqli_query($m, $query_check_login);

if (mysqli_num_rows($result_check_login) == 0) {
    // Invalid login, handle error or redirect
    echo '<p class="error-message">Login Incorrect</p>';
    exit;
}

// Build update fields based on provided data
if (!empty($name)) $update_user_fields[] = "u.nom_uti = '$name'";
if (!empty($lname)) $update_user_fields[] = "u.prenom_uti = '$lname'";
if (!empty($tel)) $update_user_fields[] = "u.phone_uti = '$tel'";
if (!empty($cin)) $update_user_fields[] = "u.cin_uti = '$cin'";
if (!empty($vi)) $update_user_fields[] = "u.ville_uti = '$vi'";
if (!empty($s)) $update_user_fields[] = "u.sexe_uti = '$s'";
if (!empty($dn)) $update_user_fields[] = "u.date_naissance = '$dn'";
if (!empty($smoke)) $update_user_fields[] = "u.fumeur_oui_non = '$smoke'";

if (!empty($email)) $update_compte_fields[] = "c.email = '$email'";
if (!empty($newlogin)) $update_compte_fields[] = "c.login = '$newlogin'";
if (!empty($pwd)) $update_compte_fields[] = "c.password = '$pwd'";

// Construct update query
if (!empty($update_user_fields) || !empty($update_compte_fields)) {
    $update_query = "UPDATE utilisateur u, compte c SET ";

    if (!empty($update_user_fields)) {
        $update_query .= implode(", ", $update_user_fields);
    }

    if (!empty($update_user_fields) && !empty($update_compte_fields)) {
        $update_query .= ", ";
    }

    if (!empty($update_compte_fields)) {
        $update_query .= implode(", ", $update_compte_fields);
    }

    $update_query .= " WHERE u.num_uti = c.num_uti AND c.login = '$login'";
    
    $resuser = mysqli_query($m, $update_query) or die(mysqli_error($m));
}

// Determine login to redirect to
$new_login_to_redirect = !empty($newlogin) ? $newlogin : $login;
header("Location: conducteurhome.php?login=" . urlencode($new_login_to_redirect));
exit;

mysqli_close($m);

// $m=mysqli_connect('localhost','root','','covoiturage') or die(mysqli_error($m)); 
// $login=$_GET['login'];
// $newlogin=$_GET["newlogin"];
// $pwd=$_GET["pwd"];
// $s=$_GET["sexe"];
// $name=$_GET["prenom"];
// $lname=$_GET["nom"];
// $tel=$_GET["tel"];
// $cin=$_GET["cin"];
// $vi=$_GET["ville"];
// $dn=$_GET["datenaiss"];
// $smoke=$_GET["fum"];
// $email=$_GET["email"];



// $updateuser="update utilisateur u,compte c 
// set u.nom_uti='".$name."',u.prenom_uti='".$lname."',
// u.phone_uti=".$tel.",u.cin_uti='".$cin."',u.ville_uti='".$vi."',u.sexe_uti='".$s."',u.date_naissance='".$dn."',
// u.fumeur_oui_non='".$smoke."',c.email='".$email."',c.login='".$newlogin."',c.password='".$pwd."' where u.num_uti=c.num_uti and c.login='".$login."'";
// $resuser=mysqli_query($m,$updateuser) or die(mysqli_error($m));


// header("Location: conducteurhome.php?login=".$newlogin."");
// exit;


// mysqli_close($m);

?>