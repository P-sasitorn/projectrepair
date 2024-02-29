<?php 

    $servername = "localhost";
    $dbname = "er9_rns";
    $username = "er9_rns";
    $password = "excise9";

    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

    try {
        $conn = new PDO($dsn, $username, $password); //data set
        // echo 'connect successfully';
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        echo 'failed connected' . $e->getMessage();        
    }


?>