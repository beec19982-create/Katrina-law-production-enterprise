
<?php
$conn = new mysqli("localhost","YOUR_DB_USER","YOUR_DB_PASS","katrina_portfolio");
if($conn->connect_error){
    die("DB Connection Failed");
}
session_start();
?>
