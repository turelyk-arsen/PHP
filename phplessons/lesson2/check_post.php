<?php
// print_r($_POST);

$name = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (trim($name == ""))
    echo "You don't write your name.";
else if (strlen(trim($name)) <= 2)
    echo "That name isn't corect";
else if (trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "")
    echo "Please, fill the form!!!";
else {
    // $_POST['password'] = md5($pass);
    // echo "<h1>All date</h1>";
    // foreach ($_POST as $key => $value)
    //     echo "<p>$value</p>";

    header('Location: about.php');
    exit;
}