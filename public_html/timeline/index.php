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
		<script type="text/javascript">
		<!--
			$(function()
			{
				$.get("https://mission-to-mars.000webhostapp.com/timeline/data.json", function(data)
				{
					$.each(data, function(index, event)
					{
						alert(index);
						alert(event);
						$("#eventTable tr:last").after("<tr><td>" + event.name + "</td><td>" + event.date + "</td><td>" + event.description + "</td></tr>");
					});
				}, "JSON");
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
				Timeline
			</h2>
			This will be the interactive timeline.
			<table style="width:100%;" id="eventTable">
				<tr>
					<td><b>Event Name</b></td>
					<td><b>Event Date</b></td>
					<td><b>Event Description</b></td>
				</tr>
			</table>
		   </article>
	   </main>
	   <?php include("../../includes/footer.php"); ?>
	</div>
        
    </body>
</html>
