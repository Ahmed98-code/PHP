<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['id'] = "pippo";
    header("location: /myFolder/ex_php/sessions/");
}