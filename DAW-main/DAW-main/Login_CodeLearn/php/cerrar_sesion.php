<?php
    session_start();
    session_destroy();
    header("Location: /DAW-main/DAW-main/index.html");
?>