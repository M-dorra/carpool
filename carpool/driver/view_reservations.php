<?php
$m = mysqli_connect('localhost', 'root', '', 'covoiturage');

if (isset($_GET['num_trajet']) && isset($_GET['login'])) {
    $num_trajet = $_GET['num_trajet'];
    $login = $_GET['login'];

    // Fetch the reservations for the given trip
    $sql = "SELECT utilisateur.nom_uti, utilisateur.prenom_uti, utilisateur.phone_uti
            FROM reserver 
            JOIN utilisateur ON reserver.reserver_num_uti = utilisateur.num_uti
            WHERE reserver.num_trajet = '$num_trajet'";
    $result = mysqli_query($m, $sql) or die(mysqli_error($m));

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Reservations for Trip $num_trajet</title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' rel='stylesheet'>
        <style>
            body {
                background-color: beige;
                padding: 20px;
            }
            .container {
                margin-top: 50px;
            }
            h3 {
                margin-bottom: 30px;
            }
            table {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h3 class='text-center'>Reservations for Trip $num_trajet</h3>
            <table class='table table-bordered'>
                <thead class='thead-dark'>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
    ";

    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "
        <tr>
            <td>{$row['nom_uti']} {$row['prenom_uti']}</td>
            <td>{$row['phone_uti']}</td>
        </tr>";
    }

    echo "
                </tbody>
            </table>
            <div class='text-center'>
                <a href='conducteurhome.php?login=$login' class='btn btn-primary'>Back to Home</a>
            </div>
        </div>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    </body>
    </html>";
} else {
    echo "<p>Please provide a trip ID and login.</p>";
}

mysqli_close($m);
?>
