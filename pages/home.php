<?php
require_once("database/database.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $books = getSearchBook($_POST);
} else {
    $books = getAllBook();
}
?>
<style>
    .head {
        width: 100%;
        height: 21vh;
        background: #000;
        background-image: url("images/galaxy.jpg");
        background-position: center;
        background-size: cover;
    }

    .collection {
        margin: 25px 110px 40px 120px;
    }

    .name {
        text-align: center;
        justify-content: center;
        align-items: center;
        display: flex;
        color: #fff;
    }
</style>
<div class="head">
    <br>
    <br>
    <h2 class="name">DIGITAL LIBRARY</h2>
    <span class="name">A hub of knowledge for transformation</span>
</div>
<div class="container rounded p-4 mb-2 mt-2">
    <div class="collection">
        <h1 class="font-weight-light text-center text-primary"><strong>Browse our Collections</strong></h1><br>
        <span>Each Collection of our Digital Library represents a domain of human development wisdom that influences—or is influenced by—coaching. Connecting these fields of inquiry is our commitment to investigate how coaching contributes to the <a href="https://sdgs.un.org/2030agenda" class="text-danger">United Nations Action Plan</a> for societal well-being. As a holistic system, these five pillars inform our research focus, which in turn generates our body of knowledge.</span>
    </div>
    <div class="row">
        <?php foreach ($books as $book) : ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="card">
                    <a href="mypdf/<?= $book['book_pdf'] ?>" target="_blank"><img class="card-img" style="height: 270px;" src="images/book/<?= $book['book_img'] ?>" alt=""></a>
                    <div class="card-body" style="height: 100px;">
                        <p class="card-title"><?= $book['title'] ?></p>
                        <span class="card-subtitle mb-2 font-weight-light"><?= $book['date'] ?></span>
                    </div>
                    <a href="detial.php?id=<?= $book['book_id'] ?>" class="btn btn-danger" style="border-radius: 20px; width: 230px; margin: 10px;">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>