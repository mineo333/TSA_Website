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
		<?php include("../../includes/head.php"); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<script type="text/javascript">
		<!--
			var dateNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
			var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			$(function()
			{
				$("div#timeline-line")
				$.get("data.json", function(data) {
					$.each(data, function(index, event)
					{
						var name = event.name;
						var date = new Date(event.date);
						var dateString = dateNames[date.getDay()] + ", " + monthNames[date.getMonth()] + " " + date.getDate() + ", " + date.getFullYear();
						var description = event.description;
						var displayString = "<li class=\"timeline-event";
						if (index % 2 == 1)
						{
							displayString += "-inverted";
						}
						displayString += "\"><div class=\"timeline-badge\"><a><i class=\"fa fa-rocket\"></i></a></div><div class=\"timeline-panel\"><div class=\"timeline-heading\"><h4 class=\"timeline-title\">"
						displayString += name;
						displayString += "</h4><p><small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\"</i> ";
						displayString += dateString;
						displayString += "</small></div><div class=\"timeline-body\"><p>";
						displayString += description;
						displayString += "</div></div>"
						$(".timeline").append(displayString);
					});
				});
			});
		//-->
		</script>
    </head>
    <body>
	<div id="container">
	   <?php include("../../includes/header.php"); ?>
	   <main>
		   <article>
			<h2>
				The Privatization of the Space Program and the United States's Space Program
			</h2>
			<ul class="timeline">
			</ul>
		   </article>
	   </main>
	   <?php include("../../includes/footer.php"); ?>
	</div>
        
    </body>
</html>