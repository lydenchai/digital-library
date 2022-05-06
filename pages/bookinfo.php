<?php
require_once("database/database.php");
$books = getAllBook();

$number = countAllBook();
?>

<div class="container rounded p-4 mb-2 mt-2">
    <?php if ($_SESSION['email'] == "Admin" or $_SESSION['email'] == "admin") : ?>
        <a href="addbook_html.php" class="text-decoration-none btn btn-success">Add Book</a>
    <?php endif; ?>
    <div class="card mt-4 mb-4" style="background: #fff; height: 10vh; text-align:center; display:flex; justify-content:center">
        <?php foreach ($number as $num) : ?>
            <div class="text-center">
                <h3 class="font-weight-light">Number of Books: <?= $num['COUNT(book_id)'] ?></h3>
            </div>
        <?php endforeach; ?>
    </div>
    <table class="table mt-4" style="box-shadow: 0px 2px 2px #babab8">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Category</th>
                <?php if ($_SESSION['username'] == "Admin" or $_SESSION['username'] == "admin") : ?>
                    <th scope="col" colspan="2" class="text-center">Action</th>
                <?php endif; ?>
            </tr>
        </thead>
        <tbody class="table-light">
            <?php foreach ($books as $book) : ?>
                <tr>
                    <td><?= $book['book_id'] ?></td>
                    <td><?= $book['book_author'] ?></td>
                    <td><?= $book['title'] ?></td>
                    <td><?= $book['date'] ?></td>
                    <td><?= $book['categoryName'] ?></td>
                    <?php if ($_SESSION['username'] == "Admin" or $_SESSION['username'] == "admin") : ?>
                        <td>
                            <a href="editbook_html.php?id=<?= $book['book_id'] ?>"><i style="font-size:24px; color: #21a6ff" class="fa ">&#xf040;</i></a>
                        </td>
                        <td>
                            <a href="deletebook.php?id=<?= $book['book_id'] ?>"><i style="font-size:24px; color: #f72a2a" class="fa">&#xf014;</i></a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>