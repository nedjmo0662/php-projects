<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</head>
<body>
    <?php require_once 'process.php';?>
    <?php
    if(isset($_SESSION['message'])){?>
        <div class="alert alert-<?= $_SESSION['msg_type'];?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
        <?php }; ?>

    <div class="container">
    <?php
        $mysqli = new mysqli('localhost','root','','crud') or die($mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
        // echo '<pre>';
        // print_r($result->fetch_assoc());
        // echo '</pre>'
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>location</th>
                    <th colspan="2">action</th>
                </tr>
            </thead>
            <?php 
                    while($row = $result->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['location'];?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $row['id'];?>"
                            class="btn btn-info"
                            >Edit</a>
                            <a href="process.php?delete=<?php echo $row['id'];?>"
                            class="btn btn-danger"
                            >Delete</a>
                        </td>
                    </tr>
            <?php }; ?>
        </table>
    </div>
    <div class="d-flex justify-content-center">
    <form action="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="form-group mb-4">
            <label>name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $name; ?>" placeholder="enter your name">
        </div>
        <div class="form-group mb-4">
            <label>location</label>
            <input class="form-control" type="text" name="location" value="<?php echo $location; ?>"  placeholder="enter your location">
        </div>
        <div class="form-group ">
            <?php
            if($update == true ){?>
                <button class="btn btn-primary" type="submit" name="update">Update</button>
            
            <?php }else {?>
                <button class="btn btn-primary" type="submit" name="save">Save</button>
            <?php }; ?>
        </div>
    </form>
    </div>
    </div>
</body>
</html>