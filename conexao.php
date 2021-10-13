<?php  
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "imobiliaria_site";

    $conn = mysqli_connect($host, $usuario, $senha, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //echo "Connected successfully";

    
?>

  