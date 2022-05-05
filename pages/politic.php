<?php
require_once("database/database.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $books = getSearchGeneral($_POST);
} else {
    $books = getAllGeneralBook();
}
?>
<div class="container rounded p-4 mb-2 mt-2"  style="background-color:#fff; box-shadow: 0px 8px 8px 8px rgba(0, 0, 0, 0.083);">
    <div class="row">
        <form action="" method="post" class="col-lg-6 col-md-8 col-sm-8 col-12">
            <h4 class="mr-4 d-flex align-item-center font-weight-light">SEARCH </h4>
            <div class="d-flex justify-content-between">
                <input type="search" class="form-control" placeholder="Search" name="word">
                <button type="submit" class="btn btn-success fa fa-search"></button>
            </div>
        </form>
    </div>
</div>
<div class="container rounded p-4 mb-2 mt-2"  style="background-color:#fff; box-shadow: 0px 8px 8px 8px rgba(0, 0, 0, 0.083);">
    <h2 class="font-weight-light text-center">Full of General Knowledge Books</h2>
    <br>
    <div class="row">
        <?php foreach ($books as $book) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="card" style="background: none;">
                    <a href="mypdf/<?= $book['book_pdf'] ?>" target="_blank"><img class="card-img" src="images/book/<?= $book['book_img'] ?>" alt=""></a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $book['title'] ?></h5>
                        <p class="card-subtitle mb-2 font-weight-light"><?= $book['date'] ?></p>
                        <div class="text-right">
                            <a href="detial.php?id=<?= $book['book_id'] ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>