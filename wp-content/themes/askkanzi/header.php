<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Ask Kanzi</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ask Kanzi">
    <meta name="author" content="https://chazselph.github.io">    
    <link rel="shortcut icon" href="images/logo.png"> 
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Oswald&display=swap" rel="stylesheet">
		    

	<?php

	wp_head();

	?>

</head> 

<body>
    <header class="header text-center">	    
	    <a class="site-title pt-lg-4 mb-0" href="<?php echo get_home_url(); ?>">Ask Kanzi</a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >
				<img class="mb-3 mx-auto logo" src="/wordpress/wp-content/themes/askkanzi/assets/images/logo.png" alt="logo" >			
				
				<?php 
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
						)
					);
				?>
				<hr>
			</div>
		</nav>
			<?php  

				dynamic_sidebar('sidebar-1');
			?>
    </header>
        <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<h1 class="heading">Ask Kanzi</h1>
		</header>