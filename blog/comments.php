<?php 

/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
include 'core/Config.php';
include('core/BaseTable.class.php');
include('core/Post.class.php');
include('core/Comment.class.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="My blog for testing">
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>

<div id="header">
<?php include 'header.php' ?>
</div>

<div id="section" style="margin-top: 200px;">
<a href="index.php"> </a>  
                <?php 
                if(!isset($_GET['id_post'])){
                    header('Location: index.php');
                    exit;
                }else{
                    $id_post = (int)trim($_GET['id_post']);                
                    $comment = new comment();
                    $post = new Post();
                    $post->load($id_post);
                    $commentList = $comment->getCommentsbyPostId($id_post);
        ?>                
                 <?php if($post->title!=null) { ?>

                             <img class="card-img-top" src="<?php echo htmlspecialchars($post->image_url); ?>" alt="Card image cap">

                    <h2><?php echo htmlspecialchars($post->title); ?></h2>

                    <p><?php echo htmlspecialchars($post->content); ?></p>
                    <hr>
                    <?php 
                    if(count($commentList) >0){
                        foreach ($commentList as $key=>$comment){?>
                                     <p>
                                     <?php echo htmlspecialchars($comment['owner']); ?>
                                     <i>commented on <?php echo htmlspecialchars($comment['comment']); ?></i>
                                                                         <i>with <?php echo htmlspecialchars($comment['content']); ?></i>


                                     </p> 
                        <?php }
                    } else {
                
                        echo "There is no comment on this post";
                    }
                  } else { ?>
                    <p>Sorry, Not available for you! </p>
                 <?php } ?>
                
                <?php } 
         
                ?>


<?php
if(isset($_POST['Submit'])){ //check if form was submitted
//Pull username, generate new ID and hash password
<<<<<<< HEAD
//session_start();
$id_post=$_SESSION["id_post"];
=======
>>>>>>> origin/master
echo $id_post;
try{
    $pdo = new PDO("mysql:host=localhost;dbname=utilizatori", "admin", "1");
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
    header("Refresh:0");

} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
}
?>

      
     <form action='#' method="POST">
     <p>Leave a comment</p> 

    <textarea rows="4" cols="50" type="text" class="form-control" name="content"></textarea>
  <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
  <p></p>
  
     </form>   
   
<?php


  ?>
                
                <?php echo $id_post;?>
    
</div>


<div id="footer">

</div>

</body>
</html>
