<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit book</title>
    <style>
        body {
            background-image: linear-gradient(to left, gray, skyblue);
        }

        form {
            background: rgb(255, 255, 255);
            box-shadow: 0px 4px 8px 8px rgba(0, 0, 0, 0.083);
            width: 700px;
            padding: 30px;
            margin: 10px auto;
            border-radius: 3px;
            background: #fff;
            margin-top: 80px;
        }
    </style>
</head>

<body>

    <?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $books = selectOneBook($id);

    foreach ($books as $book) :
    ?>
        <form action="editbook.php" method="POST" enctype="multipart/form-data">
            <h2 class=" text-center">Edite Book</h2>
            <input type="hidden" name="id" value="<?= $book['book_id'] ?>">
            <div class="form-group">
                <label class="font-weight-bold">Author</label>

                <input type="text" class="form-control" id="author" placeholder="Author" name="author" value="<?= $book['book_author'] ?>">

            </div>
            <div class="form-group">
                <label class="font-weight-bold">Title</label>

                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?= $book['title'] ?>">

            </div>
            <div class="form-group">
                <label class="font-weight-bold">Description</label>

                <textarea type="text" style="height: 20vh" class="form-control" id="description" placeholder="Description" name="des"><?= $book['description'] ?></textarea>

            </div>
            <div class="form-group">
                <label class="font-weight-bold">Category</label>
                <select class="form-control" name="category">
                    <?php if ($book['category_id'] == 1) : ?>
                        <option value="1" selected>Novel Book</option>
                        <option value="2">General Knowledge</option>
                        <option value="3">Motivation Book</option>
                        <option value="4">Funnies Book</option>
                        <option value="5">Other Book</option>
                    <?php elseif ($book['category_id'] == 2) : ?>
                        <option value="1">Novel Book</option>
                        <option value="2" selected>General Knowledge</option>
                        <option value="3">Motivation Book</option>
                        <option value="4">Funnies Book</option>
                        <option value="5">Other Book</option>
                    <?php elseif ($book['category_id'] == 3) : ?>
                        <option value="1">Novel Book</option>
                        <option value="2">General Knowledge</option>
                        <option value="3" selected>Motivation Book</option>
                        <option value="4">Funnies Book</option>
                        <option value="5">Other Book</option>
                    <?php elseif ($book['category_id'] == 4) : ?>
                        <option value="1">Novel Book</option>
                        <option value="2">General Knowledge</option>
                        <option value="3">Motivation Book</option>
                        <option value="4" selected>Funnies Book</option>
                        <option value="5">Other Book</option>
                    <?php elseif ($book['category_id'] == 5) : ?>
                        <option value="1">Novel Book</option>
                        <option value="2">General Knowledge</option>
                        <option value="3">Motivation Book</option>
                        <option value="4">Funnies Book</option>
                        <option value="5" selected>Other Book</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group">
                <div>
                    <a href="http://localhost/Digital_Library/?page=bookinfo" class="btn btn-danger" style="width: 100px;">Cancel</a>
                    <button type="submit" name="upload" class="btn btn-success mr-3" style="width: 100px;">Update</button>
                <div>
            </div>
        </form>
    <?php endforeach; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>