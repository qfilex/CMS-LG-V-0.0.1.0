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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo ($post->title); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

   
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


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
      <div class="container">
        <a class="navbar-brand" href="index.php">SURF</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(<?php echo htmlspecialchars($post->image_url); ?>)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?php echo htmlspecialchars($post->title); ?></h1>
              
              <span class="meta">Posted by
                <a href="#">USER</a>
                on <?php echo htmlspecialchars($post->creation_date); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->





    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo ($post->content); ?></p>
          </div>
        </div>
      </div>
    </article>

<hr>
<div class="comments" style="width:80%; margin-left:10%;">

  <h3>Comments</h3>
<?php 
                  if(count($commentList) >0){
                    foreach ($commentList as $key=>$comment){?>
                    <div class="panel  panel-primary">
  
                            <div class="panel-heading"> <h3 class="panel-title"><?php echo htmlspecialchars($comment['owner']); ?></h3> </div>
                           
                           <i>comment :  <?php echo htmlspecialchars($comment['comment']); ?></i>
                          <div class="panel-body "> <i> <?php echo htmlspecialchars($comment['content']); ?></i>
                                                   </div>
                       </div>
                    <?php }
                  } else {
                
                    echo "There is no comment on this post";
                  }
                  } else { ?>
                    <p>Sorry, Not available for you! </p>
                 <?php } ?>
                
                <?php } 
         
                ?>
                </div>
    <hr>
<?php
if(isset($_POST['Submit'])){ //check if form was submitted
//Pull username, generate new ID and hash password
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

      



     <form action='#' method="POST" style="    width: 60%;
    margin-left: 20%;">
     <p>Leave a comment</p> 

    <textarea rows="4" cols="50" type="text" class="form-control" name="content" style="margin-bottom:20px"></textarea>
  <button name="Submit" id="submit" class="btn btn-lg btn-primary " type="submit">Submit</button>
  <p></p>
  
 
    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
