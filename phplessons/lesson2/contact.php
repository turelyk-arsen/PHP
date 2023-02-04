<?php
session_start();

$title = "Contact";
require_once "components/header.php";
?>

<h1 class='mt-5'><?php echo $title ?></h1>

<div class="text-success"><?=$_SESSION['success_mail']?></div>
<form action="check_contact.php" method="post">
    <input type="text" name="username" value='<?= $_SESSION['user_name'] ?>' placeholder="Name" class='form-control m-2'>
    <div class="text-danger"><?= $_SESSION['error_username'] ?></div><br>

    <input type="email" name="email" value='<?php echo $_SESSION['email']?>' placeholder="email" class='form-control m-2'>
    <div class="text-danger"><?= $_SESSION['error_email'] ?></div><br>

    <input type="text" name="subject" value='<?= $_SESSION['subject']?>' placeholder="subject" class='form-control m-2'>
    <div class="text-danger"><?= $_SESSION['error_subject']?></div><br>

    <textarea name="message" placeholder="message" class='form-control m-2'><?= $_SESSION['message'] ?></textarea>
    <div class="text-danger"><?= $_SESSION['error_message']?></div><br>

    <button type='submit' class='btn btn-success'>Sent</button>
</form>

<?php
include "components/footer.php";

?>