<?php
session_start();
unset($_SESSION['producto']);
unset($_SESSION['contador']);
unset($_SESSION['sumaTotal']);
?>
<script>
    window.location = "../index.php";
</script>
