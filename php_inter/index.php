<?php 
require 'mysql.php';
require 'app.php';

$app = new App(new mysql);

$app->db->getorders();