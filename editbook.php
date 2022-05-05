<?php
require_once('database/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isUpdate = UpdateBook($_POST);

    if ($isUpdate) {
        header("Location: http://localhost/online-library-php/?page=bookinfo");
    }
}
