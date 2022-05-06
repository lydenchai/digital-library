<?php
session_start();
require_once('database/database.php');
$allUser = selectAllUser();
foreach ($allUser as $user) :
?>
  <?php if ($user['username'] === $_SESSION['username']) : ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky sticky-top text-white text-center">
      <a class="navbar-brand" href="#">
        <img src="images/user/<?= $user['profile'] ?>" width="60" height="60" class="d-inline-block align-top rounded rounded-circle" alt="">
      </a>
      <small class="navbar-brand text-white"><?= $user['username'] ?></small>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav m-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link font-weight-bold text-white" href="?page=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <div class="dropdown show">
              <a class="nav-link font-weight-bold text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Book Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="?page=novel">Novel Books</a>
                <a class="dropdown-item" href="?page=politic">General Knowledge</a>
                <a class="dropdown-item" href="?page=motivation">Motivation Books</a>
                <a class="dropdown-item" href="?page=funny">Funnies Books</a>
                <a class="dropdown-item" href="?page=other">Other Books</a>
              </div>
            </div>
          </li>
          <?php if ($user['role'] == "Admin") : ?>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-white" href="?page=bookinfo">Book Information</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-white" href="?page=user">Users</a>
            </li>
          <?php else : ?>
            <li class="nav-item active">
              <a class="nav-link font-weight-bold text-white" href="?page=contact">Contact us</a>
            </li>
          <?php endif; ?>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <a href="http://localhost/Digital_Library/user_login.php" class="btn border border-danger text-danger my-2 my-sm-0 m-2" type="submit">Logout</a>
        </form>
      </div>
    </nav>
<?php
  endif;
endforeach;
?>