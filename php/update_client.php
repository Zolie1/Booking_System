<?php
include "db.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
 $client_id = $_POST["client_id"];
 $name = $_POST["name"];    
 $client_contact = $_POST["client_contact"];    
 $client_type = $_POST["client_type"];    

 $stmt = $conn->prepare("UPDATE clients SET name = ?, client_contact= ?, client_type = ? WHERE client_id = ?" ); 
 $stmt -> bind_param("sssi", $name, $client_contact, $client_type, $client_id); 
 $stmt -> execute(); 
 echo "Client update sucessfully"; 
}
 $conn -> close(); 

?>