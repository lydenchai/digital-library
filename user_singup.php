<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Register</title>
</head>

<body style="background-image: linear-gradient(to left, gray, skyblue);">
    <?php
    require_once('database/database.php');
    $message_error = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $isCreate = createUser($_POST);
        if ($isCreate) {
            header("Location: http://localhost/Digital_Library/?page=home");
        } else {
            $message_error = "This email or username already exist, or image file must be JPG JPEG PNG";
        }
    }
    ?>
    <div class="container p-5" style="margin-top: 30px;">
        <div class="col-sm-6 m-auto" style="background-color: #fff; border-radius: 5px; box-shadow: 0px 8px 8px 8px rgba(0, 0, 0, 0.083);">
            <form action="" method="POST" class="p-4 border border-light rounded" enctype="multipart/form-data">
                <h2 class=" text-center">Register</h2>
                <p class="text-danger text-center"><?= $message_error ?></p>
                <div class="form-group">
                    <label for="firstName" class="font-weight-bold ">Username</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email" class="font-weight-bold ">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Emal" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bold ">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                </div>
                <label for="up" class="btn bg-dark" style="color: #fff">Add Profile</label>
                <div>
                    <input type="file" name="profile" class="form-control" ref="file" id="up" hidden>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success mb-4 mt-4 form-control">Register</button>
                    <p>Already a member? <a href="user_login.php" class="font-weight-bold text-danger">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>