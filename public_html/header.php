<header id="navbar">
<img src="/images/mars.png" width="150" id="bannerImage">
<nav>
    <h1>Mission To Mars</h1>
    <ul>
		<li><a href="/" <?php if ($_SERVER["PHP_SELF"] == "/"){echo "class=\"current\"";} ?>>Home</a></li>
        <li><a href="privatization.php" <?php if ($_SERVER["PHP_SELF"] == "/privatization.php"){echo "class=\"current\"";} ?>>Privatization</a></li>
        <li><a href="timeline.php" <?php if ($_SERVER["PHP_SELF"] == "/timeline.php"){echo "class=\"current\"";} ?>>Timeline</a></li>
        <li><a href="vehicles.php" <?php if ($_SERVER["PHP_SELF"] == "/vehicles.php"){echo "class=\"current\"";} ?>>Space Vehicles</a></li>
        <li><a href="career.php" <?php if ($_SERVER["PHP_SELF"] == "/career.php"){echo "class=\"current\"";} ?>>Career Fields</a></li>
        <li><a href="fail.php" <?php if ($_SERVER["PHP_SELF"] == "/fail.php"){echo "class=\"current\"";} ?>>What if we fail?</a></li>
        <li><a href="interviews.php" <?php if ($_SERVER["PHP_SELF"] == "/interviews.php"){echo "class=\"current\"";} ?>>Interviews</a></li>
        <li><a href="resources.php" <?php if ($_SERVER["PHP_SELF"] == "/resources.php"){echo "class=\"current\"";} ?>>Resources</a></li>
    </ul>
</nav>
</header>
