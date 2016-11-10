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
					<li class="<?php if ($_SERVER["PHP_SELF"] == "/index.php"){echo "active";} ?>"><a href="/">Home</a></li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/privatization/") !== false){echo "active";} ?>"><a href="/privatization">Privatization</a></li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/timeline/") !== false){echo "active";} ?>"><a href="/timeline">Timeline</a></li>
					<li class="dropdown <?php if (strpos($_SERVER["PHP_SELF"], "/vehicles/") !== false){echo "active";} ?>">
						<a href="/vehicles" class="dropdown-toggle" data-toggle="dropdown">Space Vehicles
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/vehicles/manned.php" class="<?php if ($_SERVER["PHP_SELF"] == "/vehicles/manned.php"){echo "active";} ?>">Manned</a></li>
							<li><a href="/vehicles/unmanned.php" class="<?php if ($_SERVER["PHP_SELF"] == "/vehicles/unmanned.php"){echo "active";} ?>">Unmanned</a></li>
						</ul>
					</li>
					<li class="dropdown <?php if (strpos($_SERVER["PHP_SELF"], "/career/") !== false){echo "active";} ?>">
						<a href="/career" class="dropdown-toggle" data-toggle="dropdown">Career Fields
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/career/one.php" class="<?php if ($_SERVER["PHP_SELF"] == "/career/one.php"){echo "active";} ?>">Career Field One</a></li>
							<li><a href="/career/two.php" class="<?php if ($_SERVER["PHP_SELF"] == "/career/two.php"){echo "active";} ?>">Career Field Two</a></li>
							<li><a href="/career/three.php" class="<?php if ($_SERVER["PHP_SELF"] == "/career/three.php"){echo "active";} ?>">Career Field Three</a></li>
							<li><a href="/career/four.php" class="<?php if ($_SERVER["PHP_SELF"] == "/career/four.php"){echo "active";} ?>">Career Field Four</a></li>
							<li><a href="/career/five.php" class="<?php if ($_SERVER["PHP_SELF"] == "/career/five.php"){echo "active";} ?>">Career Field Five</a></li>
						</ul>
					</li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/fail/") !== false){echo "active";} ?>"><a href="/fail">What if we fail?</a></li>
					<li class="dropdown <?php if (strpos($_SERVER["PHP_SELF"], "/interviews/") !== false){echo "active";} ?>">
						<a href="/interviews">Interviews
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/interviews/one.php" class="<?php if ($_SERVER["PHP_SELF"] == "/interviews/one.php"){echo "active";} ?>">Interview One</a></li>
							<li><a href="/interviews/two.php" class="<?php if ($_SERVER["PHP_SELF"] == "/interviews/two.php"){echo "active";} ?>">Interview Two</a></li>
						</ul>
					</li>
					<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/resources/") !== false){echo "active";} ?>"><a href="/resources">Resources</a></li>
				</ul>
			</div>
		</div>
	</nav>