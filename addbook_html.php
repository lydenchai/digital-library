<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add book</title>
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
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <form action="addbook.php" method="POST" enctype="multipart/form-data">
        <h2 class="text-center">Add Book</h2>
        <div class="form-group">
            <label class="font-weight-bold">Author</label>
            <input type="text" class="form-control" id="author" placeholder="Author" name="author">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Title</label>
            <input type="text" class="form-control" id="title" value="" placeholder="Title" name="title">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Description</label>
            <textarea type="text" class="form-control" id="description" placeholder="Description" name="des"></textarea>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Image</label>
            <input type="file" id="image" class="form-control" name="file_image">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Book PDF</label>
            <input type="file" id="pdf" class="form-control" name="file_pdf">
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Category</label>
            <select class="form-control" name="category">
                <option value="1">Novel Book</option>
                <option value="2">General Knowledge</option>
                <option value="3">Motivation Book</option>
                <option value="4">Funnies Book</option>
                <option value="5">Other Book</option>
            </select>
        </div>
        <div class="form-group">
            <div>
                <a href="http://localhost/Digital_Library/?page=bookinfo" class="btn btn-danger" style="width: 100px;">Cancel</a>
                <button type="submit" name="upload" class="btn btn-primary mr-3" style="width: 100px;">Create</button>
            </div>
        </div>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>