<?php
session_start();
if(session_destroy())// 
{
    header("location: index.php");//this will tell the location of the page where it will go
}
?>