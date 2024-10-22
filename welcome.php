<?php
session_start();
if (isset($_SESSION['name'])) {
    echo "<h2>Welcome, " . $_SESSION['name'] . "!</h2>";
    echo "<a href='logout.php'>Log Out</a>";
} else {
    echo "<h2>No session found. Please <a href='login.html'>login</a> again.</h2>";
}
?>
