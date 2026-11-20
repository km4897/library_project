<header class="site-header">
    <nav class="container nav" aria-label="Main navigation">
        <a class="brand" href="<?= BASE_URL ?>/dashboard/index.php">
            <img class="brand-logo" src="<?= BASE_URL ?>/assets/images/logo_small.png" alt="Library Management System logo">
            <span>Library LMS</span>
        </a>
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-links">Menu</button>
        <div class="nav-links" id="nav-links">
            <a href="<?= BASE_URL ?>/books/index.php">Books</a>
            <a href="<?= BASE_URL ?>/members/index.php">Members</a>
            <a href="<?= BASE_URL ?>/loans/index.php">Loans</a>
            <a href="<?= BASE_URL ?>/authors/index.php">Authors</a>
            <a href="<?= BASE_URL ?>/categories/index.php">Categories</a>
            <a href="<?= BASE_URL ?>/auth/logout.php">Logout</a>
        </div>
    </nav>
</header>
