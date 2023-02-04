<?php
$title = "About";
require_once "components/header.php";
?>
<div class="container mt-3">
   <h1>About</h1> 
   <form action="check_post.php" method="post">
    <input type="text" name="username" placeholder="Your name" class="form-control m-2">
    <input type="email" name="email" placeholder="Your email" class="form-control m-2">
    <input type="password" name="password" placeholder="Your password" class="form-control m-2">
    <textarea type="message"  name="message" placeholder="Your message" class="form-control m-2"></textarea>
    <input type="submit" value="Send" class="btn btn-success m-2">
</form>
</div>
<?php
include "components/footer.php";
?>