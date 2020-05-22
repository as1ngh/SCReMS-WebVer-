<?php
session_start();
if(isset($_POST['consoleBtn'])){
    require 'dbh.adt.php';
    $userEnroll=$_SESSION['userEnroll'];
    $askEnroll=$_POST['askEnroll'];
    $item="console";
    $startTime=date("h:i");
    $endTime="present";
    
    $sql="SELECT * FROM items WHERE userEnroll='$askEnroll' AND userEnd='$endTime' AND userItem='$item';";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $sql="UPDATE items SET userEnd='$startTime' WHERE userEnroll='$askEnroll' AND userEnd='$endTime' AND userItem='$item'";
        mysqli_query($conn, $sql);
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
    else{
        header("Location:  ../mainScreen.php?error=noPossesion");
        exit; 
    }
}
else{
    header("Location:  ../mainScreen.php?error=invalidAccess");
    exit;
}