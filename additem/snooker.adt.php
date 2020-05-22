<?php
session_start();
if(isset($_POST['snookerBtn'])){
    require 'dbh.adt.php';
    $userEnroll=$_SESSION['userEnroll'];
    $item="snooker";
    $startTime=$_POST['startTime'];
    $endTime=$_POST['endTime'];
    if(empty($startTime)||empty($endTime)){
        header("Location:  ../mainScreen.php?error=emptyField");
        exit;
    }
    else{
        $sql="INSERT INTO items (userEnroll, userItem, userStart, userEnd) VALUES ('$userEnroll', '$item', '$startTime', '$endTime');";
        if(mysqli_query($conn, $sql)){
            header("Location:  ../mainScreen.php?update=success");
            exit;
        }
        else{
            header("Location:  ../mainScreen.php?update=failed");
            exit;
        }
    }
}
else{
    header("Location:  ../mainScreen.php?error=invalidAccess");
    exit;
}