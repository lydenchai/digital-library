<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body style="background-image: linear-gradient(to left, gray, skyblue);">
    <?php
    require_once('database/database.php');
    $messageError = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $isValid = verifyUser($_POST);
        session_start();
        $_SESSION['username'] = $_POST['username'];
        if ($isValid) {
            header("Location: http://localhost/online-library-php/?page=home");
        } else {
            $messageError = "Incorrect password or username";
        }
    }
    ?>
    <div class="container p-5" style="margin-top: 30px;">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 m-auto" style="background-color: #fff; border-radius: 5px; box-shadow: 0px 8px 8px 8px rgba(0, 0, 0, 0.083);">
            <form action="" method="POST" class="p-4 border border-light rounded">
                <h2 class=" text-center">Login</h2>
                <hr class="bg-white">
                <p class="text-danger text-center"><?= $messageError ?></p>
                <div class="form-group">
                    <label for="name" class="font-weight-bold ">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bold ">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mb-4 mt-4 form-control">Login</button>
                    <p>Don't have an account yet? <a href="user_singup.php" class="font-weight-bold text-success">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>