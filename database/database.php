<?php

// Connect to database
function database()
{
    return new mysqli('localhost', 'root', '', 'online-librabry');
}

// Create book
function addBook($value)
{
    $author = $value['author'];
    $title = $value['title'];
    $description = $value['des'];

    $imageName = $_FILES['file_image']['name'];
    $imageSize = $_FILES['file_image']['size'];
    $imageType = $_FILES['file_image']['type'];
    $img_tmp_name = $_FILES['file_image']['tmp_name'];
    $image_dir = "images/book/";
    move_uploaded_file($img_tmp_name, $image_dir . $imageName);

    $pdfName = $_FILES['file_pdf']['name'];
    $pdfType = $_FILES['file_pdf']['type'];
    $pdfSize = $_FILES['file_pdf']['size'];
    $pdf_tmp_name = $_FILES['file_pdf']['tmp_name'];
    $pdf_dir = "mypdf/";
    move_uploaded_file($pdf_tmp_name, $pdf_dir . $pdfName);
    $category = $value['category'];

    return database()->query("INSERT INTO books (title, description, book_img, book_pdf, book_author, category_id, user_id)VALUES('$title', '$description', '$imageName', '$pdfName', '$author', '$category', 1)");
}

// Get all books
function getAllBook()
{
    return database()->query("SELECT * FROM books INNER JOIN categories ON books.category_id = categories.category_id INNER JOIN users USING(user_id) ORDER BY books.book_id DESC");
}

// Count book
function countAllBook()
{
    return database()->query("SELECT COUNT(book_id) FROM books");
}

// Search book
function getSearchBook($value)
{
    $key = $value['word'];
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id AND books.title LIKE '%$key%' ORDER BY books.book_id DESC ");
}

// Search in general
function getSearchGeneral($value)
{
    $key = $value['word'];
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 2 AND books.title LIKE '%$key%' ORDER BY books.book_id DESC ");
}

// Search novel 
function getSearchNovel($value)
{
    $key = $value['word'];
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 1 AND books.title LIKE '%$key%' ORDER BY books.book_id DESC ");
}

// Search funny book
function getSearchFunny($value)
{
    $key = $value['word'];
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 4 AND books.title LIKE '%$key%' ORDER BY books.book_id DESC ");
}

// Search other book
function getSearchOther($value)
{
    $key = $value['word'];
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 5 AND books.title LIKE '%$key%' ORDER BY books.book_id DESC ");
}

// Search motivation book
function getSearchMotivation($value)
{
    $key = $value['word'];
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 3 AND books.title LIKE '%$key%' ORDER BY books.book_id DESC ");
}

// Get book by category
function getAllGeneralBook()
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 2 ORDER BY books.book_id DESC ");
}
function getAllMotivationBook()
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 3 ORDER BY books.book_id DESC ");
}
function getAllFunnyBook()
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 4 ORDER BY books.book_id DESC ");
}
function getAllOtherBook()
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 5 ORDER BY books.book_id DESC ");
}
function getAllNovelBook()
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.category_id = 1 ORDER BY books.book_id DESC ");
}

function getOneBook($id)
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE book_id = $id");
}

// Select book 
function selectOneBook($id)
{
    return database()->query("SELECT books.book_id, books.title, books.description, books.date, books.book_img, books.book_pdf, books.book_author, categories.category_id, categories.categoryName AS categoryName FROM books INNER JOIN categories ON books.category_id = categories.category_id WHERE books.book_id = $id");
}

// Update book
function UpdateBook($value)
{
    $author = $value['author'];
    $title = $value['title'];
    $description = $value['des'];
    $category = $value['category'];
    $id = $value['id'];

    return database()->query("UPDATE books SET books.book_author='$author', books.title='$title', books.description='$description', books.category_id='$category' WHERE book_id = $id");
}

// Delete book
function deleteBookByID($id)
{
    database()->query("DELETE FROM books WHERE book_id = $id");
}

// Delete user
function deleteUserByID($id)
{
    database()->query("DELETE FROM users WHERE user_id = $id");
}

// Create user 
function createUser($value)
{
    $username = $value['username'];
    $email = $value['email'];
    $password = $value['password'];
    $passEnc = password_hash($password, PASSWORD_DEFAULT);
    $role = "User";

    $profileName = $_FILES['profile']['name'];
    $profileSize = $_FILES['profile']['size'];
    $profileType = $_FILES['profile']['type'];
    $profile_tmp_name = $_FILES['profile']['tmp_name'];

    $extension = pathinfo($profileName, PATHINFO_EXTENSION);
    $extensionLocal = strtolower($extension);

    $allowExtension = array('jpg', 'jpeg', 'png');

    $isValidEmail = true;
    $users = selectAllUser();
    foreach ($users as $user) {
        if ($email === $user['email'] or $username === $user['username']) {
            $isValidEmail = false;
        }
    }

    if ($isValidEmail and in_array($extensionLocal, $allowExtension)) {
        $newImageName = uniqid('post-', true) . '.' . $extensionLocal;
        $profile_dir = "images/user/" . $profileName;

        move_uploaded_file($profile_tmp_name, $profile_dir);
        return database()->query("INSERT INTO users (username, profile, email, password, role) VALUES('$username', '$profileName', '$email', '$passEnc', '$role')");
    }
}

// Select all user
function selectAllUser()
{
    return database()->query("SELECT * FROM users ORDER BY user_id ASC");
}

// User login
function verifyUser($value)
{

    $db = new mysqli('localhost', 'root', '', 'online-librabry');
    $username = $value['username'];
    $password = $value['password'];

    $allUser = $db->query("SELECT password, username FROM users where username = '$username'");
    $isValid = false;
    foreach ($allUser as $user) {
        if (password_verify($password, $user['password']) and $user['username'] === $username) {
            $isValid = true;
        }
    }
    return $isValid;
}
