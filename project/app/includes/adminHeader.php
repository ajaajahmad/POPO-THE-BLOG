<header>
      <div class="logo">
        <h1 class="logo-text">Online News Portal</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
        <!--<li><<a href="#">Sign Up</a></li>
          <li><<a href="#">Login</a></li>-->
          <?php if (isset($_SESSION['id'])): ?>
          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              <?php echo $_SESSION['username']; ?>
              <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul>
              <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
            </ul>
            </li>
            <?php endif; ?>
            </ul>
    </header>