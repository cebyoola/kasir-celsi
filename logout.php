<?php
session_start();
session_destroy(); // Menghapus semua session
header("Location:login/index.php?pesan=logout"); // Redirect ke login
exit;
?>
