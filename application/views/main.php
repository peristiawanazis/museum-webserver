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
        $('.edit').click(function(){
          $('.backdrop, .box_edit').animate({'opacity':'.50'}, 300, 'linear');
          $('.box_edit').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box_edit').css('display', 'block');
        });
         $('.lightbox_admin').click(function(){
          $('.backdrop, .box_edit_admin').animate({'opacity':'.50'}, 300, 'linear');
          $('.box_edit_admin').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box_edit_admin').css('display', 'block');
        });
          $('.lightbox_delete').click(function(){
          $('.backdrop, .box_delete_marker').animate({'opacity':'.50'}, 300, 'linear');
          $('.box_delete_marker').animate({'opacity':'1.00'}, 300, 'linear');
          $('.backdrop, .box_delete_marker').css('display', 'block');
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
         $('.backdrop_edit, .box_edit').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop_edit, .box_edit').css('display', 'none');
        });
          $('.backdrop_admin, .box_edit_admin').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop_admin, .box_edit_admin').css('display', 'none');
        });
           $('.backdrop_delete, .box_delete_marker').animate({'opacity':'0'}, 300, 'linear', function(){
          $('.backdrop_delete, .box_delete_marker').css('display', 'none');
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
      <li><a href="#" class="edit">Edit</a></li>
      <li><a href="#" class="lightbox_delete">Delete</a></li>
    </ul>
  </li>
  <li><a href="#">Administrator</a>
    <ul>
       <li><a href="#" class="lightbox_admin">Edit Profil</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </li>
  
</ul>



</div>
<div id="mainbar">

<?php echo $map['html']; ?>

<div id="operation"> <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span><a href="<?php echo base_url();?>Home/do_logout"> Log Out</a></button> 
 <button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Current Location</button></div>

 

</div>
</div>
</div>

   <div class="backdrop_admin"></div>
  <div class="box"><div class="close">x</div>
  <form action='<?php echo base_url();?>Home/insert' method='post' name=''>
  <table>
  <tr><td>ID Map : </td><td><input type="text" id="idmap" name="idmap" size="35" value="<?php echo 'm'.$aa; ?>" disabled></input></td></tr>
  <tr><td>Latitude : </td><td><input type="text" id="latitude" name="latitude" size="35"></input></td></tr>
  <tr><td>Longitude : </td><td><input type="text" id="longitude" name="longitude" size="35"></input></td></tr>   
  <tr><td>Map Name : </td><td><input type="text" id="map_name" name="map_name" size="35"></input></td></tr>  
  <tr><td>Harga : </td><td><input type="text" id="harga" name="harga" size="35"></input></td></tr> 
  <tr><td>Regional : </td><td><?php
                $attributes = 'class = "form-control" name="regional" id = "regional"';
                echo form_dropdown('regional',$regional,set_value('regional'),$attributes);?></td></tr>
  <tr><td>Description : </td><td><input type="text" id="desc" name="desc" size="35"></input></td></tr> 
  <tr><td>Jam Buka : </td><td><input type="time"  id="open" name="open" size="35"></input></td></tr> 
  <tr><td>Jam Tutup : </td><td><input type="time" id="close" name="close" size="35"></input></td></tr> 
  <tr><td><input type="submit" value="Submit"></td></tr>
  </table>
  </form>
  </div>
<!-- berakhir -->
  <div class="backdrop_edit"></div>
  <div class="box_edit"><div class="close">x</div>   
  Input Museum Name : <input type="text"></input><input type="button" value="Search" /><br><br>
  <table>
   <tr><td>Map Name : </td><td><input type="text" size="35" value="Museum Fatahillah" =""></input></td><td></td></tr>  
   <tr><td>Price : </td><td><input type="text" size="35" value="10000" =""></input></td><td></td></tr> 
   <tr><td>Regional : </td><td><input type="text" size="35" value="Jakarta Timur" =""></input></td><td></td></tr> 
   <tr><td>Deskripsi : </td><td><input type="text" size="35" value="Museum untuk barang kerajaan fatahilah" =""></input></td>
    <tr><td>Jam Buka : </td><td><input type="text" size="35" value="07:00am" =""></input></td>
   <tr><td>Jam Tutup : </td><td><input type="text" size="35" value="08:00pm" =""></input></td>
   <td></td></tr> 
     <tr><td><input type="button" value="Update"></td></tr>
  </table></div>

  <div class="backdrop"></div>
  <div class="box_edit_admin"><div class="close">x</div>
  <table>
  <tr><td>Username : </td><td><input type="text" size="35" value="<?php echo $username; ?>"></input></td></tr>
  <tr><td>Password : </td><td><input type="text" size="35" value="<?php echo $password; ?>"></input></td></tr>   
 
  <tr><td><input type="button" value="Update"></td></tr>
  </table>
  </div>

   <div class="backdrop_delete"></div>
  <div class="box_delete_marker"><div class="close">x</div>   
  Input Museum Name : <input type="text"></input><input type="button" value="Search" /><br><br>
  <table>
   
  </table></div>
 
</body>
</html>

