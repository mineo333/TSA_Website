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
				$.get( "data.json", function( data ) {
					$.each(data, function(index, event)
					{
						$("#eventTable tr:last").after("<tr><td>" + event.name + "</td><td>" + event.date + "</td><td>" + event.description + "</td></tr>");
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
				Timeline
			</h2>
			<p>This will be the interactive timeline. I've managed to pull the data from file "data.json". The data is displayed here. Doing this is half the work; the rest is just a matter of how we're going to display the data.
			<p>Funny story: I've spent hours working on this, and I was completely baffled as to why it didn't work. I've done this kind of work before (in my Hangman AI), and this was literally the <i>exact same thing!</i> I just figured it out today, and you know what the problem was? It was a single "." that shouldn't have been there in the data file. I had spent hours debugging the main timeline/index.php file, when I didn't even think to check the data file. I probably made that mistake while I was typing out the data file at our meeting last Thursday.
			<p>Moral of the story: don't just check the main parts of a project when it fails. The small parts, that you "know" won't fail, might just have a little mistake in them that causes your whole project to screw up.
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
