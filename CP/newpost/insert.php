<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=utilizatori", "admin", "1");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 

 try{
$sql = "INSERT INTO posts (title, content , creation_date) VALUES (:title, :content , :time)";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':title', $_REQUEST['title']);
    $stmt->bindParam(':content', $_REQUEST['content']);
    $stmt->bindParam(':time',date("Y-m-d h:i:sa"));
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>