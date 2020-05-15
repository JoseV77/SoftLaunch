<?php define('BASE_URL', '/cas222/SoftLaunch/'); ?>

<header>
    <a href="javascript:void(0);" class="icon" onclick="dropLinks()">
        <i class="fas fa-bars"></i>
    </a>

    <nav id="desktop-nav">
        <img src="<?php echo BASE_URL; ?>images/aceintheholeLogo.png" class="logo" alt="logo">
        <a href="<?php echo BASE_URL; ?>index.php">Home</a>
        <a href="<?php echo BASE_URL; ?>events.php">Events</a>
        <a href="<?php echo BASE_URL; ?>register">Register</a>
        <a href="<?php echo BASE_URL; ?>contact">Contact</a>
    </nav>

    <nav id="mobile-nav">
        <img src="<?php echo BASE_URL; ?>images/logo2.jpg" class="logo" alt="ace">
        <div id="links">
            <a href="<?php echo BASE_URL; ?>index.php">Home</a>
            <a href="<?php echo BASE_URL; ?>events.php">Events</a>
        </div>
    </nav>
</header>