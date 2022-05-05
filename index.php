<?php
include_once('partial/header.php');

if (isset($_GET['page'])) {
    include_once('partial/navbar.php');
    include_once('partial/navbar.php');
    if ($_GET['page'] == "home") {
        include_once('pages/home.php');
    } elseif ($_GET['page'] == "novel") {
        include_once('pages/novel.php');
    } elseif ($_GET['page'] == "politic") {
        include_once('pages/politic.php');
    } elseif ($_GET['page'] == "motivation") {
        include_once('pages/motivation.php');
    } elseif ($_GET['page'] == "funny") {
        include_once('pages/funny.php');
    } elseif ($_GET['page'] == "contact") {
        include_once('pages/contact.php');
    } elseif ($_GET['page'] == "user") {
        include_once('pages/users.php');
    } elseif ($_GET['page'] == "bookinfo") {
        include_once('pages/bookinfo.php');
    } elseif ($_GET['page'] == "other") {
        include_once('pages/other.php');
    }
} else {
    include_once('user_login.php');
    die();
}
include_once('partial/footer.php');
