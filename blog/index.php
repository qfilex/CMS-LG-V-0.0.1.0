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
<?php include 'header.php' ?>
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
© v0.0.1.7
</div>

</body>
</html>

