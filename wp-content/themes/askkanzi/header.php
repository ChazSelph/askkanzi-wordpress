<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bonobo Hope</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bonobo Hope International">
    <meta name="author" content="https://chazselph.github.io">    
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Martel:wght@200;300;400;600&family=Mitr:wght@300;400&family=Oswald:wght@400;500&family=Recursive:wght@400;500;600&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Archivo:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300;400&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/43b9ad071c.js" crossorigin="anonymous"></script>
	<?php

	wp_head();

	?>

</head> 

<body>
    <header class="text-center">	            
	    
	    <div class="topnav" id="myTopnav">
			  <a href="<?php echo get_site_url(); ?>/">Home</a>
			  <a href="">Articles</a>
			  <a href="<?php echo get_site_url(); ?>/media">Media</a>
			  <a href="page-donations.php">How to Help</a>
			  <a href="<?php echo get_site_url(); ?>/contact">Contact</a>
			  <a href="<?php echo get_site_url(); ?>/about">About</a>
			  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			    <i class="fa fa-bars"></i>
			  </a>
		</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



    </header>
        <div class="main-wrapper">
