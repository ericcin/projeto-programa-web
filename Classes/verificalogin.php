<?php

if(!$_SESSION['email']) {
    header('Location:/./index.html');
    exit;
}
?>