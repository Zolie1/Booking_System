<?php

include "db.php";

if($_SERVER["REQUEST_METHOD"]== "POST"){ 

    $client_id = $_POST["client_id"]; 

    $stmt = $conn->prepare("DELETE FROM clients where client_id = ? ");
    $stmt -> bind_param("i", $client_id); 
    $stmt -> execute(); 
    echo "<br>"."Client deleted successfully"; 
}

$conn -> close();  
?> 