<?php
session_start();
session_destroy();
header('Location: /linda_storgard_shopping/index.php');
?>