<?php

    session_start();

    unset($_SESSION['clerk']);

    header('Location:index.php');

?>