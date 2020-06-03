<?php define('BASE_URL', '/cas222/SoftLaunch/'); ?>

<header>
    <a href="javascript:void(0);" class="icon" onclick="dropLinks()">
        <i class="fas fa-bars"></i>
    </a>

    <nav id="desktop-nav">
        <a href="<?php echo BASE_URL; ?>index.php" class="logo">
            <img src="<?php echo BASE_URL; ?>images/logo2.jpg" id="desktop-logo" alt="logo">
        </a>
        <a href="<?php echo BASE_URL; ?>index.php">Home</a>
        <a href="<?php echo BASE_URL; ?>events.php">Events Information</a>
        <a href="<?php echo BASE_URL; ?>register">Register</a>
        <a href="<?php echo BASE_URL; ?>contact">Contact</a>
    </nav>

    <nav id="mobile-nav">
        <a href="<?php echo BASE_URL; ?>index.php" class="logo">
            <img src="<?php echo BASE_URL; ?>images/logo2.jpg" alt="ace" class="logo">
        </a>
        <div id="links">
            <a href="<?php echo BASE_URL; ?>index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>events.php">Events Information</a>
            <a href="<?php echo BASE_URL; ?>register">Register</a>
            <a href="<?php echo BASE_URL; ?>contact">Contact</a>
        </div>
    </nav>
</header>