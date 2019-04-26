<!-- The header definition -->
<!DOCTYPE html>
<html>
<head>
  <title>Header</title>
  <meta charset="utf-8">
</head>
<body>
  <nav class="navbar fixed-top navbar-light bg-dark">
    <a class="navbar-brand" href="greenvideo_au.php">
      <img src="images/logo1.png" height="35" alt="GreenVideo">
    </a>
    <a class="navmenu" href="account.php">
      <?php
        echo "$user";
      ?>
    </a>
    <a class="navmenu" href="blog.php" style="margin-left: 20px;">
      BLOG
    </a>
    <div class="menu">
      <a class="navmenu" href="about.php">
        ABOUT
      </a>
      <a class="navmenu" href="contact.php">
        CONTACT
      </a>
    </div>
    <!-- The Search Form - Used to search the video database -->
    <form class="form-inline" method="get" action="catalog.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" id="search" required>
      <div class="search">
        <button class="btn btn-light my-2 my-sm-0" type="submit"> 
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form>
  </nav>
</body>
</html>