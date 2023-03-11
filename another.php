<?php
session_start();

$_SESSION['name']='nedjmo';
include 'train.php';
echo '<a href="about.php">about</a>';

