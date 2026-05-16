<?php

session_start();

session_destroy();

header("Location: /proyecto-web/public/index.php?page=login");

exit;

?>