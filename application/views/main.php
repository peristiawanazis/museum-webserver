<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
  <!-- Bootstrap -->
    <link href="<?=base_url()?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url()?>/css/layout_mainpage.css" rel="stylesheet">
    <!-- Mapp JS from library -->
    <?php echo $map['js']; ?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>/js/bootstrap.min.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url()?>/js/jquery.min.js"></script>
    <script src="<?=base_url()?>/js/jquery-1.10.2.js"></script>
  <script src="<?=base_url()?>/js/jquery-ui.js"></script>


<?php echo $map['js']; ?>
  <script>
 $(document).ready(function () {
  $('#nav > li > a').click(function(){
    if ($(this).attr('class') != 'active'){
      $('#nav li ul').slideUp();
      $(this).next().slideToggle();
      $('#nav li a').removeClass('active');
      $(this).addClass('active');
    }
  });
});
  </script>
  <script type="text/javascript">
 
      $(document).ready(function(){
        
        $('.lightbox').click(function(){
          $('.backdrop, .box').animate({'opacity':'.50'}, 300, 'linear');
          $('.box').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box').css('display', 'block');
        });
        $('.lightbox_edit').click(function(){
          $('.backdrop, .box_edit').animate({'opacity':'.50'}, 300, 'linear');
          $('.box_edit').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box_edit').css('display', 'block');
        });
 
        $('.close').click(function(){
          close_box();
        });
 
        $('.backdrop').click(function(){
          close_box();
        });
 
      });
 
      function close_box()
      {
        $('.backdrop, .box').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop, .box').css('display', 'none');
        });
         $('.backdrop, .box_edit').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop, .box_edit').css('display', 'none');
        });
      }
 
    </script>

</head>
<body>

<div id="headbar">
<nav class="navbar navbar-default" style="padding: 0;">
  <div class="container-fluid">
    <div class="navbar-header" >
      <img src="<?=base_url()?>/img/dki.png" style="height: 45px; width: 45px;" class="img-circle" id="logodki" >
       <a class="navbar-brand" href="#" id="sbt">Museum Apps</a>
      <img src="<?=base_url()?>/img/logo.png" style="height: 45px; width: 45px; float: right;" class="img-circle" id="logo" >
  </div>
  </div>
</nav>
</div>
<div id="wrapper">

<div id="container">
<div id="sidebar">
<ul id="nav">
  <li><a href="#">Data Museum</a>
    <ul>
      <li>  <a href="#" class="lightbox">Add</a></li>
      <li><a href="#" class="lightbox_edit">Edit</a></li>
      <li><a href="#">Delete</a></li>
    </ul>
  </li>
  <li><a href="#">Administrator</a>
    <ul>
      <li><a href="#">Edit Profil</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </li>
  
</ul>



</div>
<div id="mainbar">

<?php echo $map['html']; ?>

<div id="operation"> <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span><a href="<?=base_url()?>login"> Log Out</a></button> 
 <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Current Location</button></div>


 

</div>
</div>
</div>

   <div class="backdrop"></div>
  <div class="box"><div class="close">x</div>   <?php 'echo base_url()main/lm'?></div>
  <div class="backdrop"></div>
  <div class="box_edit"><div class="close">x</div>   <table>
    <tr><td>Input Museum Name : </td><td><input type="text"></input></td></tr>
    <tr><td><input type="button" value="Submit"></td></tr>
  </table></div>
 
</body>
</html>

