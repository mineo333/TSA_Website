<!DOCTYPE html>
<html>
    <head>
		<!-- 
		*******************************
		*
		*  Made for Technology 
		*  Student Association
		*
		*
		*  By Ethan James, Ryan Kim,
		*  Darin Mao, Sharad Khanna,
		*  Jason Kim, and Ben Miller.
		*
		*******************************
		-->
		<meta charset="utf-8">
		<title>Mission To Mars</title>	
		<?php include("../includes/head.php"); ?>
    </head>
    <body>
	<div id="container">
	   <?php include("../includes/header.php"); ?>
	   <main>
		   <article>
			<header>
				The requested URL <?php echo $_SERVER["REQUEST_URI"]; ?> was not found on this server
			</header>
			Don't give up looking, though! NASA scientists <a href="https://www.nasa.gov/press-release/nasa-confirms-evidence-that-liquid-water-flows-on-today-s-mars">found water on Mars</a> after <i>years</i> of looking
			<br><img src="http://www.nasa.gov/sites/default/files/thumbnails/image/15-195_perspective_2.jpg" style="width:100%;">
		   </article>
	   </main>
	   <?php include("../includes/footer.php"); ?>
	</div>
        
    </body>
</html>
