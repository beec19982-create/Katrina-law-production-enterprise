
<?php include("config.php"); ?>
<?php
if(isset($_POST['subscribe'])){
    $email = $_POST['email'];
    $conn->query("INSERT INTO subscribers(email) VALUES('$email')");
    echo "Subscription successful!";
}
?>
<form method="POST">
<h2>Subscribe for Premium Access</h2>
<input type="email" name="email" required placeholder="Enter your email"><br><br>
<button name="subscribe">Subscribe</button>
</form>
