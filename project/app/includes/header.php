<header>
      <a href="<?php echo BASE_URL .'/index.php' ?>" class="logo">
      <link rel='icon' href="./image/favicon.png" type='image/x-icon'/>
        <h1 class="logo-text">Online News Portal</h1>
       </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
        <li><a href="Politics">Politics</a></li>
        <li><a href="Sports">Sports</a></li>
        <li><a href="Business">Business</a></li>
        <li><a href="Culture">Culture</a></li>
        <li><a href="#">Ecomomy</a></li>
        <li><a href="#">Social Media</a></li>
        <?php if (isset($_SESSION['id'])): ?>
          <li>
            <a href="#">
              <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
              <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>

              <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
            </li>
          <?php else: ?> 
             <li><a href="<?php echo BASE_URL . '/register.php' ?>"><i class="fas fa-user-plus"></i> Sign Up</a></li>
             <li><a href="<?php echo BASE_URL . '/login.php' ?>"><i class="fas fa-user"></i> Login</a></li>
          <?php endif; ?>
            </ul>
    </header>