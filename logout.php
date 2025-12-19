<?php
session_start();
session_destroy();
echo "<h1>Logged Out Successfully</h1>";
echo "<p>Session removed!</p>";
echo "<a href='registration.php'>Login Again</a>";
?>