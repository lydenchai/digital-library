<?php

include_once("partial/header.php");
require_once("database/database.php");

$id = $_GET['id'];
$books = getOneBook($id);
?>

<div class="container p-4">
    <a href="http://localhost/Digital_Library/?page=home" class="fa fa-arrow-left btn btn-primary">Back</a>
    <?php foreach ($books as $book) : ?>
        <div class="card mb-2 mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="card-image col-lg-3 col-md-6 col-sm-3">
                        <img class="img-fluid" width="200" src="images/book/<?= $book['book_img'] ?>" alt="Don't see?">
                    </div><br>
                    <div class="info col-lg-9 col-md-6 col-sm-9">
                        <p><strong>Author:</strong> <?= $book['book_author'] ?></p>
                        <p><strong>Title:</strong> <?= $book['title'] ?></p>
                        <p><strong>Description:</strong> <?= $book['description'] ?></p>
                        <p><strong>Category:</strong> <?= $book['categoryName'] ?></p>
                        <p><strong>Date Posted:</strong> <?= $book['date'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>