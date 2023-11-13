<?php
    session_start();
    session_destroy();
    header("Location: /DAW-main/index.html");
?>