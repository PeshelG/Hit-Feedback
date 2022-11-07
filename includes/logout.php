<?php
session_unset();
session_destroy();
header("Location: /university/public_html/admin.php");

?>
