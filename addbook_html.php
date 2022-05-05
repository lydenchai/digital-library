<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add book</title>
    <style>
        body {
            background: #f0eded;
        }

        form {
            background-color: #888;
            width: 700px;
            padding: 15px;
            margin: 10px auto;
            border-radius: 3px;
            background: #fff;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    <form action="addbook.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-sm-4 col-form-label font-weight-bold">Author</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="author" placeholder="Author" name="author">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label font-weight-bold">Title</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="title" value="" placeholder="Title" name="title">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label font-weight-bold">Description</label>
            <div class="col-sm-8">
                <textarea type="text" class="form-control" id="description" placeholder="Description" name="des"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label font-weight-bold">Image</label>
            <div class="col-sm-8">
                <input type="file" id="image" class="form-control" name="file_image">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label font-weight-bold">Book PDF</label>
            <div class="col-sm-8">
                <input type="file" id="pdf" class="form-control" name="file_pdf">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-form-label font-weight-bold">Category</label>
            <div class="col-sm-8">
                <select class="form-control" name="category">
                    <option value="1">Novel Book</option>
                    <option value="2">General Knowledge</option>
                    <option value="3">Motivation Book</option>
                    <option value="4">Funnies Book</option>
                    <option value="5">Other Book</option>
                </select>
            </div>
        </div>
        <div class="form-group d-flex justify-content-end ml-3">
            <div style="margin: 5px;">
                <a href="http://localhost/online-library-php/?page=bookinfo" class="btn btn-danger">Cancel</a>
            </div>
            <div style="margin: 5px;">
                <button type="submit" name="upload" class="btn btn-primary mr-3">Create</button>
            </div>
        </div>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>