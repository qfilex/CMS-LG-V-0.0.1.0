

<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-white bg-maincol">
  <span class="navbar-brand mb-0 h1">QBlog CMS</span>

  <p class="navbar-text navbar-right">                <a href="../login/logout.php" class="btn btn-secondary" id=""> <span class="glyphicon glyphicon-log-out"></span> Log out</a></p>

</nav>


   <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                      Numele Sitelui
                    </a>
                </li>
                <li>
                    <a href="../cp/newpost/allposts.html">Articole</a>
                </li>
                <li>
                    <a href="../cp/newpost/newpost.html">Creaza articol</a>
                </li>
                <li>
                    <a href="#">Pagini</a>
                </li>
                <li>
                    <a href="#">Creaza pagina</a>
                </li>
                <li>
                    <a href="#">Costumizare</a>
                </li>
                  <li>
                    <a href="#">Despre CMS</a>
                </li>
              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluidv align-items-center">
                
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>


<div class="container">
		<div class="full-content-center">
			<div class="maintenance animated flipInX">
				<div class="d-flex justify-content-center align-items-center">
					<h1 style=""><i class="fa fa-hourglass-start" aria-hidden="true"></i>Pagina se afla in consturctie</h1><br>
				
				</div>
			</div>
			
		</div>
	</div>



            </div>
        </div>
    </div>





  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  </body>
</html>