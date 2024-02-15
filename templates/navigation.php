<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <a class="navbar-brand" href="../index.php">
    <img src="assets/images/brand.png" style="width:80px; margin-right:20px;" alt="" srcset="">
    <span style="font-size:30px;">Tournament Management System</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
<?php
if(isset($_SESSION["user_email"])){
  ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="dashboard.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="logout.php">Logout</a>
      </li>
    </ul>
  <?php
}
else{
  ?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="feedback.php">Feedback</a>
      </li>
    </ul> 
  <?php
}
?>
    
  </div>
</nav>