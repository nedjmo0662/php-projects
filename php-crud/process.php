<?php
// connecting with pdo
// try {

//     $conn = new PDO("mysql:host=localhost;dbname=crud;",'root','') ;
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected succefffssfully";
// }catch(PDOException $e) {
//     echo 'connection failed: ' . $e->getMessage();
// }


// connecting with mysqli;
session_start();
$name = '';
$location = '';
$update = false;
$id = 0;
// $con = 'save';
$mysqli = new mysqli('localhost','root','','crud') or die($mysqli_error($mysqli));

if(isset($_POST['save'])) {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("INSERT INTO data (name,location) VALUES ('$name','$location')")
            or die($mysqli->error);
    $_SESSION['message'] = 'record has been saved';
    $_SESSION['msg_type'] = 'success';

    header('location:index.php');
}

if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);
    $_SESSION['message'] = 'record has been deleted';
    $_SESSION['msg_type'] = 'danger';
    header('location:index.php');

}

if(isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    $update = true;
    if($result) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $location = $row['location'];
        // $con = 'update';
    }

}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $mysqli->query("UPDATE data SET name='$name',location='$location' WHERE id=$id") or
    die($mysqli->error);
    $_SESSION['message'] = 'record has been updated';
    $_SESSION['msg_type'] = 'warning';
    header('location:index.php');

}