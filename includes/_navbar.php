<nav id="main-navbar">
    <div>
        <a href="index.php" class="logo-a">
            <img src="images/logo-t.png" alt="JC Dog Grooming" id="logo"><span class="logo-text">JC Dog Grooming</span>
        </a>
    </div>
    <ul>
        <li><a href="index.php" class="<?= ($activePage == 'index') ? 'current': ''; ?>">Home</a></li>
        <li><a href="services.php" class="<?= ($activePage == 'services') ? 'current': ''; ?>">Services</a></li>
        <li><a href="prices.php" class="<?= ($activePage == 'prices') ? 'current': ''; ?>">Prices</a></li>
        <li><a href="contact.php" class="<?= ($activePage == 'contact') ? 'current': ''; ?>">Contact</a></li>
    </ul>
</nav>