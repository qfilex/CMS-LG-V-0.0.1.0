<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password


try{
    $pdo = new PDO("mysql:host=localhost;dbname=utilizatori", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

 try{
$sql = "INSERT INTO comments (content) VALUES (:content )";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':content', $_REQUEST['content']);
    //$stmt->bindParam(':time',date("Y-m-d h:i:sa"));
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

?>

