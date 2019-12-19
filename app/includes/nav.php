<nav>
    <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
        <h1 class="logo-text"><span>Adventure</span> Blog</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav-links">
        <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>

        <!-- Determine if the user is logged in -->
        <?php if (isset($_SESSION['id'])) : ?>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <?php if ($_SESSION['admin'] == 1) : ?>
                        <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                    <?php endif; ?>

                    <li><a class="log-out" href="#">Log Out</a></li>
                </ul>
            </li>
        <?php else : ?>
            <!-- If user is not logged in the these list item will display -->
            <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
            <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
        <?php endif ?>

    </ul>
</nav>
<!-- END NAV-->