<?php
include "db.php"; 

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $name = $_POST["name"]; 
    $client_contact = $_POST["client_contact"]; 
    $client_type = $_POST["client_type"]; 

    $stmt = $conn->prepare("INSERT INTO clients(name, client_contact, client_type values (?, ?, ?)"); 
    $stmt -> bind_param("sss", $name, $client_contact, $client_type); 
    $stmt -> execute(); 
    echo "Client successfully added"; 
}

$conn -> close(); 

?>