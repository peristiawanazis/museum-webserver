<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
  <!-- Bootstrap -->
    <link href="<?=base_url()?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>/css/layout_mainpage.css" rel="stylesheet">

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>/js/bootstrap.min.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url()?>/js/jquery.min.js"></script>
<style type="text/css">

	#logo{
		position: absolute;
		top: 0px;
    	right: 10px;
	}
	#logodki {
		position: absolute;
		top: 0px;
    	left: 10px;
	}
	#sbt{
		position: absolute;
		left: 50%;
	}
.container_bg{
  position: absolute;
  background-color: red;
  width: 100%;
  height: 80%;
  margin-top: 50Px;
}


</style>

</head>
<body>

   <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                   
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

       

 <!-- Header Content -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header" >
      <img src="<?=base_url()?>/img/dki.png" style="height: 45px; width: 45px;" class="img-circle" id="logodki" >
       <a class="navbar-brand" href="#" id="sbt">Museum Apps</a>
      <img src="<?=base_url()?>/img/logo.png" style="height: 45px; width: 45px; float: right;" class="img-circle" id="logo" >
  </div>
  </div>
  </nav>

   <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                   <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>

