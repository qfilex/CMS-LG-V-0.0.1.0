<nav class="navbar navbar-white bg-maincol">
  <span class="navbar-brand mb-0 h1"><a href='http://localhost:8888/CMS%20LG%20V%200.0.1.0/CP/cp.php'>QBlog CMS</a></span>

  <p class="navbar-text navbar-right">                <a href="../login/logout.php" class="btn btn-secondary" id=""> <span class="glyphicon glyphicon-log-out"></span> Log out</a></p>

</nav>


   <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="http://localhost:8888/CMS%20LG%20V%200.0.1.0/blog/">
                      Vezi Site-ul
                    </a>
                </li>
                <li>
                    <a href="../cp/newpost/allposts.html">Articole</a>
                </li>
                <li>
                    <a href="../cp/newpost/newpost.php">Creaza articol</a>
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




<div id="page-content-wrapper">
            <div class="container-fluidv align-items-center">
                
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
</div>
</div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>