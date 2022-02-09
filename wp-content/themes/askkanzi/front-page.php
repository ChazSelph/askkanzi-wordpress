<?php 
	get_header();
?>   


		<article class="content front-page-content px-3 py-5 p-md-5">
	    <div class='container'>
			<p class="mt-3 lead">Bonobo Hope Initiative is a 501(c)(3) non-profit organization founded in 2013 <br/>
				by a collection of scientists, conservationists, philosophers, and artists united <br/>
				in pursuit of research into, and free expression for, bonobos around the world.


			<div class="carousel-container">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="/wordpress/wp-content/themes/askkanzi/assets/images/kanzi-lights-fire.png" class="image-block" alt="1">
					<div class="bottom-left">Kanzi lights a fire</div>
				  </div>
				  <div class="carousel-item">
					<img src="/wordpress/wp-content/themes/askkanzi/assets/images/teco-touches-ipad.png" class="image-block" alt="2">
					<div class="bottom-left">Teco interacts with an iPad</div>
				  </div>
				  <div class="carousel-item">
					<img src="/wordpress/wp-content/themes/askkanzi/assets/images/matata-looks-distance.png" class="image-block" alt="3">
					<div class="bottom-left">Matata, the family matriarch</div>
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				 
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				  
				  <span class="sr-only">Next</span>
				</a>
			  </div>
				 
			</div>
			
			  

			<div class="card">
			  <h5 class="card-header">Featured</h5>
			  <div class="card-body">
			    <h5 class="card-title">Meet Dr. Sue Savage-Rumbaugh</h5>
			    <p class="card-text">“Now we must invent common methods for either interpreting the sound utterances of nonhuman beings or allow them to produce sounds that can make-meaning in dialogues with us, using devices with commonly shared symbols on them. If we fail in this task, our ‘superior consciousness and linguistic capacities’ will be of no consequence.” 
			</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>


			<div class="card-deck">
			  <div class="card">
			    <img class="card-img-top" src="/wordpress/wp-content/themes/askkanzi/assets/images/kanziusesmakeup.png" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Who is Kanzi?</h5>
			      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			      
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="/wordpress/wp-content/themes/askkanzi/assets/images/animalssaywhat.png" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">Animals Say What? Podcast</h5>
			      <p class="card-text">Sue Savage-Rumbaugh and Chaz Selph join Anysja Roberts to discuss bonobos, dogs, and the non-human mind.</p>
			      
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="/wordpress/wp-content/themes/askkanzi/assets/images/interspeciesinternet.jpg" alt="Interspecies Internet logo">
			    <div class="card-body">
			      <h5 class="card-title">Interspecies Internet</h5>
			      <p class="card-text">Could non-human animals be onboarded to the Internet? Read here about the think-tank to encourage, explore and facilitate interfaces for interspecies communication and approaches for deciphering the communication of non-human animals.</p>
			      
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
   