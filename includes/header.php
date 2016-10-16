<header id="navbar">
<img src="../resources/images/mars.png" width="150" id="bannerImage">
<nav>
    <h1>Mission To Mars</h1>
    <ul>
		<li <?php if ($_SERVER["PHP_SELF"] == "/index.php"){echo "class=\"current\"";} ?>><a href="/">Home</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/privatization.php"){echo "class=\"current\"";} ?>><a href="privatization.php">Privatization</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/timeline.php"){echo "class=\"current\"";} ?>><a href="timeline.php">Timeline</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/vehicles.php"){echo "class=\"current\"";} ?>><a href="vehicles.php">Space Vehicles</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/career.php"){echo "class=\"current\"";} ?>><a href="career.php">Career Fields</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/fail.php"){echo "class=\"current\"";} ?>><a href="fail.php">What if we fail?</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/interviews.php"){echo "class=\"current\"";} ?>><a href="interviews.php">Interviews</a></li>
        <li <?php if ($_SERVER["PHP_SELF"] == "/resources.php"){echo "class=\"current\"";} ?>><a href="resources.php">Resources</a></li>
    </ul>
</nav>
</header>
