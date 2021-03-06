<?php 
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
include 'core/Config.php';
include('core/BaseTable.class.php');
include('core/Post.class.php');
$post = new Post();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="My blog for testing">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="clean-blog.min.css" rel="stylesheet"
</head>
<body>


<?php
function get_snippet($text, $count=50)
{
    $words = explode(' ', $text);

    $result = '';
    for ($i = 0; $i < $count && isset($words[$i]); $i++) {
        $result .=" ".$words[$i];
    }

    return $result;
}



 ?>



<div id="header">
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"  style="background: #e2ef9a94;">
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
</div>

<div id="section" style="margin-top:200px">

<?php if (count($post->getPosts()) > 0) { ?>
Last posts:
    <?php foreach($post->getPosts() as $key=>$post) { ?>

<?php $snipet = ($post['content']) ;
 $pot=get_snippet( $snipet );

?>

                
<div class="col-md-8">

<div class="card mb-4">
            <img class="card-img-top" src="<?php echo htmlspecialchars($post['image_url']); ?>" alt="Card image cap">
            <div class="card-body">
 <h2><a href="comments.php?id_post=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?> </a> </h2>
                <p class="card-text"><?php echo $pot ?></p>
              <a href="comments.php?id_post=<?php echo $post['id']; ?>" class="btn btn-primary">Read More →</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlspecialchars($post['creation_date']); ?> by
              <a href="#">USER</a>
            </div>
          </div>

</div>


        <?php } ?>

<?php } else { ?>
           please post content!
<?php } ?>
</div>


<div id="footer">
© v0.0.2.3 Waterfall
</div>

</body>
</html>

