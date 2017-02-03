<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- 
		*******************************
		*
		*  Made for Technology 
		*  Student Association
		*		
		*  By Ethan James, Ryan Kim,
		*  Darin Mao, Jason Kim,
		*  and Ben Miller.
		*
		*******************************
		-->

		<meta charset="utf-8">
		<title>Mission To Mars</title>	
		<?php include("../../includes/head.php"); ?>
		<style type="text/css">
			figure {
				width: 100%;
				background-color: white;
				border-radius: 5px;
				padding: 8px;
				margin-bottom: 10px;
			}
			@media (min-width: 768px) {
				figure {
					width: 47.5%;
					float: none;
				}
			}
		</style>
    </head>
    <body>
	<?php include("../../includes/navbar.php"); ?>
	<div class="container">
		<div class="page-header">
			<h2>
				Evolution of Space Vehicles
			</h2>
		</div>
		<p>Space vehicles are, obviously, a key part of space exploration. Without these vehicles, space exploration would not be possible. 
		This section will outline the accomplishments and contributions to space exploration of several key space vehicles. It is divided into two 
		parts: manned and unmanned.</p>
		<figure class="vehicle-page" style="float: left;">
			<img class="img-responsive" src="/images/iss.jpg">
			<figcaption>
				The International Space Station (ISS)
				<div class="image-attribution">
					By NASA/Crew of STS-132 [Public domain], <a href="https://commons.wikimedia.org/wiki/File%3AInternational_Space_Station_after_undocking_of_STS-132.jpg" target="_blank">via Wikimedia Commons</a>
				</div>
				<p><a href="/vehicles/manned" role="button" class="btn btn-primary">Learn more about manned space vehicles</a></p>
			</figcaption>
		</figure>
		<figure class="vehicle-page" style="float: right;">
			<img class="img-responsive" src="/images/newhorizons.jpg">
			<figcaption>
				An artist's view of the New Horizons spacecraft passing by Pluto and its moon Charon. 
				<div class="image-attribution">
					By NASA/JHU APL/SwRI/Steve Gribben [Public domain], <a href="https://commons.wikimedia.org/wiki/File%3A15-011a-NewHorizons-PlutoFlyby-ArtistConcept-14July2015-20150115.jpg" target="_blank">via Wikimedia Commons</a>
				</div>
				<p><a href="/vehicles/unmanned" role="button" class="btn btn-primary">Learn more about unmanned space vehicles</a></p>
			</figcaption>
		</figure>
	</div>
	<?php include("../../includes/footer.php"); ?>    
    </body>
</html>
