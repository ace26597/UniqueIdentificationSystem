
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: eswelcome.php"); // Redirecting To Home Page
}
?>


