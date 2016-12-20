<!DOCTYPE html>
<html>
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
			div.panel {
				color: black;
			}
			div.vehicle-description {
				margin-top: 1%;
			}
			@media (min-width: 768px) {
				div.panel-body figure {
					width: 30%;
					float: left;
				}
				div.panel-body .vehicle-description {
					width: 65%;
					float: right;
				}
				div.vehicle-description {
					margin-top: 0px;
				}
			}
		</style>
	    <script type="text/javascript">
		<!--
			$(function()
			{
				var data = [
	{
		"name":"Sputnik",
		"description":"Sputnik was the first unmanned spacecraft. /n It was made of aluminum, and had the size of a beach ball.",
		"image":"/images/sputnik1.jpg",
		"caption":"An image of the Sputnik 1 in space"
	},
	{
		"name":"Explorer I",
		"description":"INSERT DESCRIPTION HERE",
		"image":"/images/explorer1.jpg",
		"caption":"An image of explorer 1 flying in space"
	},
	{
		"name":"Mariner 2",
		"description":"INSERT DESCRIPTION HERE",
		"image":"/images/mariner2.jpg",
		"caption":"An image of Mariner 2 flying in space"
	},
	{
		"name":"Luna 16",
		"description":"INSERT DESCRIPTION HERE",
		"image":"/images/luna16.jpg",
		"caption":"An image of Luna 16 flying in space"
	},
	{
		"name":"Hubble Telescope",
		"description":"INSERT DESCRIPTION HERE",
		"image":"/images/hubble.jpg",
		"caption":"A diagram of the Hubble Telescope"
	},
	{
		"name":"Mars Odyssey",
		"description":"INSERT DESCRIPTION HERE",
		"image":"/images/odyssey.jpg",
		"caption":"A diagram of the Mars Odyssey"
	},
	{
		"name":"Curiosity Rover",
		"description":"INSERT DESCRIPTION HERE",
		"image":"/images/curiosity.jpg",
		"caption":"A picture of the Curiosity Rover on mars"
	}
];
				$.each(data, function(index, event)
				{
					var name = event.name;
					var description = event.description;
					var image = event.image;
					var caption = event.caption;
					var displayString = "<div class=\"panel panel-default\"><div class=\"panel-heading\">";
					displayString += name;
					displayString += "</div><div class=\"panel-body\"><figure><img class=\"img-responsive\" src=\"";
					displayString += image;
					displayString += "\" /><figcaption>";
					displayString += caption;
					displayString += "</figcaption></figure><div class=\"vehicle-description\">";
					displayString += description;
					displayString += "</div></div></div>";
					$(".vehicles").append(displayString);
				});
			});
		//-->
		</script>
    </head>
    <body>
<?php include("../../includes/header.php"); ?>
<div class="container">
		<div class="page-header">
			<h2>
				Unmanned Space Vehicles
			</h2>
		</div>
		<p>
		Ever since the launch of Sputnik, unmanned space vehicles have constantly been evolving.  This page outlines some major changes that have happened over time.	
		</p>
		<div class="vehicles">
		</div>
	<p><h2>Cited Sources</h2></p>
	</div>
   <?php include("../../includes/footer.php"); ?> 
    </body>
</html>
