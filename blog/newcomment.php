
<?php
//Pull username, generate new ID and hash password
session_start();
$id_post=$_SESSION["id_post"];
echo $id_post;
try{
    $pdo = new PDO("mysql:host=localhost;dbname=utilizatori", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

 try{
$sql = "INSERT INTO comments (content,comment,id_post) VALUES (:content,:comment,$id_post)";
    $stmt = $pdo->prepare($sql);
   /// include ('comments.php');
//echo $id_post;
    // bind parameters to statement
    $stmt->bindParam(':content', $_REQUEST['content']);
    $stmt->bindParam(':comment',date("Y-m-d h:i:sa"));
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

?>

