<?php

include_once("partial/header.php");
require_once("database/database.php");

$id = $_GET['id'];
$books = getOneBook($id);
?>

<div class="container p-4">
    <a href="http://localhost/online-library-php/?page=home" class="fa fa-arrow-left btn btn-primary">Back</a>
    <?php foreach ($books as $book) : ?>
        <div class="card mb-2 mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="card-image col-lg-3 col-md-6 col-sm-3">
                        <img class="img-fluid" width="200" src="images/book/<?= $book['book_img'] ?>" alt="Don't see?">
                    </div>
                    <div class="info col-lg-9 col-md-6 col-sm-9">
                        <h3 class="font-weight-light">Author: <?= $book['book_author'] ?></h3>
                        <h4 class="font-weight-light">Title: <?= $book['title'] ?></h4>
                        <p>Description: <?= $book['description'] ?></p>
                        <p>Category: <?= $book['categoryName'] ?></p>
                        <small>Date Posted: <?= $book['date'] ?></small>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>