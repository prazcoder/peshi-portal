<nav class="navbar sidenav col-2 navbar-dark bg-dark" style="height: 100vh;">
    <ul class="navbar-nav pt-5">
      <li class="nav-item <?php if($page=='main'){echo 'active';}?>">
        <a class="nav-link" href="main.php" style="color: <?php if($page=='main'){echo 'black';}?>;">Dashboard</a>
      </li>
        <li class="nav-item <?php if($page=='entry'){echo 'active';}?>">
        <a class="nav-link" href="entry.php" style="color:<?php if($page=='entry'){echo 'black';}?>;">नयाँ पेसी इन्ट्री</a>
      </li>
      <li class="nav-item <?php if($page=='report'){echo 'active';}?>">
        <a class="nav-link" href="report.php" style="color:<?php if($page=='report'){echo 'black';}?>;">रिपोर्ट</a>
      </li>
        <li class="nav-item <?php if($page=='publish'){echo 'active';}?>">
        <a class="nav-link" href="publish.php" style="color:<?php if($page=='publish'){echo 'black';}?>;">प्रकाशित गर्नुहोस्</a>
      </li>
      <li class="nav-item <?php if($page=='sys'){echo 'active';}?>">
        <a class="nav-link" href="sys.php" style="color: <?php if($page=='sys'){echo 'black';}?>;">हाल प्रकाशित</a>
      </li>
        <li class="nav-item <?php if($page=='search'){echo 'active';}?>">
        <a class="nav-link" href="search.php" style="color: <?php if($page=='search'){echo 'black';}?>;">खोजी</a>
      </li>
    </ul>
    <form method="POST">
      <button name="logout" class="btn btn-primary btn-md m-5">Log Out</button>
    </form>
    <?php
  if (isset($_POST['logout'])) {
    session_destroy();
    header("Location:loginform.php");
  }
  ?>
  </nav>