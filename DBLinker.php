<?php
$con = mysqli_connect("localhost", "website", "website@admin", "Aashit");
function trimer($trim)
{
    return htmlspecialchars(mysqli_escape_string($GLOBALS['con'], $trim));
}
?>