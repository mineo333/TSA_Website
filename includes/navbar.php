	<nav class="navbar navbar-inverse navbar-fixed-top style-noborder">
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
					<li class="<?php if ($_SERVER["PHP_SELF"] == "/index.php"){echo "active";} ?>"><a href="/">Home</a></li>
					<li class="<?php if ($_SERVER["PHP_SELF"] == "/privatization/index.php"){echo "active";} ?>"><a href="/privatization">Privatization</a></li>
					<li class="<?php if ($_SERVER["PHP_SELF"] == "/timeline/index.php"){echo "active";} ?>"><a href="/timeline">Timeline</a></li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/vehicles/") !== false){echo "active";} ?>"><a href="/vehicles">Evolution of Space Vehicles</a></li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/career/") !== false){echo "active";} ?>"><a href="/career">Career Fields</a></li>
					<li class="<?php if ($_SERVER["PHP_SELF"] == "/fail/index.php"){echo "active";} ?>"><a href="/fail">What if we fail?</a></li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/interviews/") !== false){echo "active";} ?>"><a href="/interviews">Interviews</a></li>
					<li class="<?php if ($_SERVER["PHP_SELF"] == "/resources/index.php"){echo "active";} ?>"><a href="/resources">Resources</a></li>
				</ul>
			</div>
		</div>
	</nav>
