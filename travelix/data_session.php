<?php
    session_start();
    $_SESSION['location_name'] = $_GET['data_session'];
    header("location: ../");
?>