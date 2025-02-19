<?php 
// $m = mysqli_connect('localhost','root','','covoiturage');     

// $s=$_GET["sexe"];
// $name=$_GET["prenom"];
// $lname=$_GET["nom"];
// $tel=$_GET["tel"];
// $cin=$_GET["cin"];
// $vi=$_GET["ville"];
// $dn=$_GET["datenaiss"];
// // $age=$_GET["age"];
// $smoke=$_GET["fum"];
// $log=$_GET["user"];
// $password=$_GET["pswd"];
// $email=$_GET["email"];

// //////////

// $insert_user="insert into utilisateur (nom_uti,prenom_uti,phone_uti,cin_uti,ville_uti,sexe_uti,date_naissance,fumeur_oui_non)
// values('".$lname."','".$name."','".$tel."','".$cin."','".$vi."','".$s."','".$dn."','".$smoke."')";
// $res_user=mysqli_query($m,$insert_user);
// $user_id=mysqli_insert_id($m) or die(mysqli_error($m));

 

// $insert_acc="insert into compte(num_type_compte,num_uti,login,password,email) values(3,$user_id,'".$log."','".$password."','".$email."')";
// $res_acc=mysqli_query($m,$insert_acc) or die(mysqli_error($m));







	

// mysqli_close($m);  

// header("Location: ../passenger/passagerhome.html");
// exit;
session_start();

$m = mysqli_connect('localhost', 'root', '', 'covoiturage');     

$s = $_GET["sexe"];
$name = $_GET["prenom"];
$lname = $_GET["nom"];
$tel = $_GET["tel"];
$cin = $_GET["cin"];
$vi = $_GET["ville"];
$dn = $_GET["datenaiss"];
$smoke = $_GET["fum"];
$log = $_GET["user"];
$password = $_GET["pswd"];
$email = $_GET["email"];

// Insert user information into 'utilisateur' table
$insert_user = "INSERT INTO utilisateur (nom_uti, prenom_uti, phone_uti, cin_uti, ville_uti, sexe_uti, date_naissance, fumeur_oui_non)
                VALUES ('$lname', '$name', '$tel', '$cin', '$vi', '$s', '$dn', '$smoke')";
$res_user = mysqli_query($m, $insert_user);

if ($res_user) {
    // Retrieve the auto-generated user ID
    $user_id = mysqli_insert_id($m);

    // Insert account information into 'compte' table
    $insert_acc = "INSERT INTO compte (num_type_compte, num_uti, login, password, email)
                   VALUES (3, $user_id, '$log', '$password', '$email')";
    $res_acc = mysqli_query($m, $insert_acc);

    if ($res_acc) {
        // User successfully signed up, create session variables
        $_SESSION['user_id'] = $user_id;
        $_SESSION['login'] = $log;
        $_SESSION['email'] = $email;
        // Add more session variables as needed

        // Close MySQL connection
        mysqli_close($m);

        // Redirect to home page or any desired page
        header("Location: ../passenger/passagerhome.php");
        exit;
    } else {
        // Error inserting account information
        echo "Error: " . mysqli_error($m);
    }
} else {
    // Error inserting user information
    echo "Error: " . mysqli_error($m);
}

mysqli_close($m);

?>