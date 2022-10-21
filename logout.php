<?php
    session_start();
    setcookie("is_logged","",time()-1);
    // Destroying All Sessions
    if(session_destroy())
    {
    // Redirecting To Home Page
    header("Location: login.php");
    }
?>