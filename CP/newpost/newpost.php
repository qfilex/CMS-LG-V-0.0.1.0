<?php

session_start();
if(isset($_SESSION['username'])){
    ?>
   
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">

<!--Add adaugam quill editorul de texte  , trebuuie de schimbat pe sursa locala -->
<link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.0.0/quill.bubble.css" rel="stylesheet">
<link rel="stylesheet" href="dist/ui/trumbowyg.min.css">


</head>

<body>


<?php include_once('../header.php'); ?> 




<div class="container">
	<div class="row justify-content-center">
	    
	    <div class="col-md-8 align-self-center">
	        
    		<h1>Create post</h1>
    		
    		<form action="insert.php" method="POST">
    		    
    		    
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control"  name="title" />
    		                      <label for="content">Content <span class="require">*</span></label>
<label for="image_url">Image_url <span class="require">*</span></label>
                    <input type="text" class="form-control" name="image_url" />
                                  <label for="content">Content <span class="require">*</span></label>
                   <textarea rows="4" cols="50" type="text" class="form-control" id="trumbowyg-demo" name="content" /></textarea>

                </div>
    		    
    		    <div class="form-group">
    		        <labdel for="description">Description</label>
    		        <div id="editor-container" name="content">
</div>
    		    </div>
    		    
    		    <div class="form-group">
    		        <p><span class="require">*</span> - required fields</p>
    		    </div>
    		    
    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary" action="passText">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>


<!--Add adaugam quill editorul de texte  , trebuuie de schimbat pe sursa locala -->




 <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>

    <script src="dist/trumbowyg.min.js"></script>

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script type="text/javascript">
$('#trumbowyg-demo').trumbowyg({
    btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ],
    autogrow: true
});
</script>





</body>


</html>

<?php
} ?>

