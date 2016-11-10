<!DOCTYPE html>
<html lang="en">
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
						var displayString = "<li id=\"" + index + "\"><h4>" + name + "</h4><h5>" + dateString + "</h5><p>" + description + "</li>";
						$("#timeline-events").append(displayString);
						var displayString = "<li><a href=\"#\" data-event-id=\"" + index + "\">" + dateString + "</a></li>";
						$("#timeline-dates").append(displayString);
					});
					$("ul#timeline-events li#0").show().addClass("current");
					$("ul#timeline-dates li a").click(function()
					{
						var thisEvent = $(this).attr("data-event-id");
						$("ul#timeline-events li.current").removeClass("current").fadeOut(function()
						{
							$("ul#timeline-events li#" + thisEvent).addClass("current").fadeIn();
						});
					});
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
				The Privatization of the Space Program and the United States's Space Program
			</h2>
		</div>
		<div id="timeline">
			<ul id="timeline-dates">
			</ul>
			<ul id="timeline-events">
			</ul>				
		</div>
	</div>
	<?php include("../../includes/footer.php"); ?>    
    </body>
</html>
