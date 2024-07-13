<?php
session_start();
    session_destroy();
    echo "<script>
        alert('You are successfully logged out');
        window.location.href='signin.php';
        </script>";
?>