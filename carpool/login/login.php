<?php 
// $m=mysqli_connect('localhost','root','','covoiturage');   
// $log=$_GET["user"];
// $password=$_GET["pswd"];



// $sql="select num_type_compte from compte where login='".$log."' and password='".$password."'";
// $result=mysqli_query($m,$sql);
// $typ=mysqli_fetch_array($result);
// $typeid=$typ[0];


// // echo $uid;
// //If username and password exist in our database then create a session.
// //Otherwise echo error.
// $reqtype="select * from compte c,type_compte t where c.num_type_compte=t.num_type_compte";
// $restype=mysqli_query($m,$reqtype) or die(mysqli_error($m));

// $typ=mysqli_fetch_row($restype);



// // echo $typ[0]."    ".$typ[1]."   ".$typ[2]."   ".$typ[3];
// if(mysqli_num_rows($result)>0)
// {
// 	if($typeid==3){
// 		$_SESSION['login'] = $login_user; // Initializing Session
//         header("location: ../driver/conducteurhome.php?login=".$log.""); // Redirecting To Other Page
// 	}else if($typeid==2){
		
// 		$_SESSION['login'] = $login_user; // Initializing Session
//         header("location: ../passenger/passagerhome.php?login=".$log.""); // Redirecting To Other Page
		
// 	}else if($typeid==1){
		
// 		$_SESSION['login'] = $login_user; // Initializing Session
//         header("location: ../admin/adminhome.html"); // Redirecting To Other Page
// 	}
	
	

// }else{
// echo "Incorrect username or password";

// }

// mysqli_close($m);  

session_start();

// Establish database connection
$m = mysqli_connect('localhost', 'root', '', 'covoiturage') or die(mysqli_connect_error());

// Retrieve username and password from GET parameters
$log = $_GET["user"];
$password = $_GET["pswd"];

// Sanitize input to prevent SQL injection (optional but recommended)
$log = mysqli_real_escape_string($m, $log);
$password = mysqli_real_escape_string($m, $password);

// Query to check login credentials
$sql = "SELECT c.num_type_compte 
        FROM compte c 
        WHERE c.login = '$log' AND c.password = '$password'";
$result = mysqli_query($m, $sql);

if ($result) {
    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $typeid = $row['num_type_compte'];

        // Set session variable based on user type
        $_SESSION['login'] = $log; // Initializing Session with username or login identifier

        // Redirect based on user type
        if ($typeid == 3) {
            header("location: ../driver/conducteurhome.php?login=" . $log);
            exit;
        } else if ($typeid == 2) {
            header("location: ../passenger/passagerhome.php?login=" . $log);
            exit;
        } else if ($typeid == 1) {
            header("location: ../admin/adminhome.html");
            exit;
        }
    } else {
        // If no matching user found
        echo "Incorrect username or password";
    }
} else {
    // Error in query execution
    echo "Error: " . mysqli_error($m);
}

// Close database connection
mysqli_close($m);

?>















