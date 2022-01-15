<?php 
	get_header();
?>   


		<article class="content front-page-content px-3 py-5 p-md-5">
	    <div class='container'>
			<p class="mt-3 lead">Ask Kanzi is an LLC composed of researchers dedicated to exploring the nonhuman mind through multi-modal communication. </p>

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="/wordpress/wp-content/themes/askkanzi/assets/images/kanzi-lights-fire.png" class="d-block w-100" alt="1">
				  </div>
				  <div class="carousel-item">
					<img src="/wordpress/wp-content/themes/askkanzi/assets/images/teco-touches-ipad.png" class="d-block w-100" alt="2">
				  </div>
				  <div class="carousel-item">
					<img src="/wordpress/wp-content/themes/askkanzi/assets/images/matata-looks-distance.png" class="d-block w-100" alt="3">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			  </div>
			  <section class="theme-bg-dark py-5 mt-4 text-center">
				<h3 class='text-light d-block'>Read about the Legal Petition</h3>
                    <button type="submit" class="btn btn-primary">Read here</button>
				</section>
			<div class="row row-cols-1 mt-4 row-cols-md-2">
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Animals Say What? Podcast</h5>
					  <p class="card-text">Sue Savage-Rumbaugh and Chaz Selph join Anysja Roberts to discuss communication and the nonhuman mind. Listen <a href="/wordpress/2022/01/11/animals-say-what-podcast/">here</a>.</p>
					</div>
				  </div>
				</div>
				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					  <h5 class="card-title">Interspecies Internet</h5>
					  <p class="card-text"><a href="https://www.interspecies.io">Read here</a> about the think-tank to accelerate understanding of interspecies communication.</p>
					</div>
				  </div>
				</div>
		</div>
		<article class="front-page-p" >
			<?php 
				if(have_posts()){
					while(have_posts()){
						the_post();
						the_content();
					}
				}
			?>
	    </article>
	    </article>


		
	    
<?php 
	get_footer();
?>
   