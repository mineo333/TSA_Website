	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</button>
				<a class="navbar-brand" href="/">Mission To Mars</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li <?php if ($_SERVER["PHP_SELF"] == "/index.php"){echo "class=\"active\"";} ?>><a href="/">Home</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/privatization/index.php"){echo "class=\"active\"";} ?>><a href="/privatization">Privatization</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/timeline/index.php"){echo "class=\"active\"";} ?>><a href="/timeline">Timeline</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/vehicles/index.php"){echo "class=\"active\"";} ?>><a href="/vehicles">Space Vehicles</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/career/index.php"){echo "class=\"active\"";} ?>><a href="/career">Career Fields</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/fail/index.php"){echo "class=\"active\"";} ?>><a href="/fail">What if we fail?</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/interviews/index.php"){echo "class=\"active\"";} ?>><a href="/interviews">Interviews</a></li>
					<li <?php if ($_SERVER["PHP_SELF"] == "/resources/index.php"){echo "class=\"active\"";} ?>><a href="/resources">Resources</a></li>
				</ul>
			</div>
		</div>
	</nav>
