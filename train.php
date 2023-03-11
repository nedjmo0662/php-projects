<?php
$user = 'root';
$dsn = 'mysql:host=localhost;dbname=train';
$pass = '';
// $option = array(
//     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
// );
try {
    $conn = new PDO($dsn,$user,$pass);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
    // $a = "ALTER TABLE `students` ADD `name` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL";
    // $conn->exec($a);

    for($i=1; $i<=5; $i++){
        $j=1;
            $q = "INSERT INTO orders (order_id,prise,client,client_id) VALUES ($i,'100$' , 'mohi',$j)";
    $conn->exec($q);
    }
    for($i=6; $i<=10; $i++){
        $j=2;
            $q = "INSERT INTO orders (order_id,prise,client,client_id) VALUES ($i,'100$' , 'nedjmo',$j)";
    $conn->exec($q);
    }

    // $b = "ALTER TABLE students drop te";
    // $conn->exec($b);
    // $c = "DELETE FROM students WHERE id=1 || id=2 || id =3 || id=4;";
    // $conn->exec($c);
    // $d  = "CREATE TABLE students(
    //     id INT(11)
    //     );";
    // $conn->exec($d);

    // $e = "UPDATE students SET id = 88 WHERE id=1 or id=2 or id=3 ";
    // $conn->exec($e);
}
catch (PDOException $e) {
    echo 'faild' . $e->getMessage();
}