<?php
if(isset($_POST['logBtn'])){
    require 'dbh.inc.php';
    $logEnroll=$_POST['logEnroll'];
    $logPassword=$_POST['logPassword'];
    if(empty($logEnroll)||empty($logPassword)){
        header("Location: ../index.php?error=emptyField&logEmail=".$logEnroll);
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE userEnroll=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../index.php?error=sqlError&logEnroll=".$logEnroll);
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$logEnroll);
            mysqli_stmt_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
                $pwdCheck=password_verify($logPassword,$row['userPassword']);
                if($pwdCheck==true){
                    session_start();
                    $_SESSION['userEnroll']=$logEnroll;
                    header("Location: ../mainScreen.php?login=success");
                    exit();
                }
                else if($pwdCheck==false){
                    header("Location: ../index.php?error=wrongPwd&logEnroll=".$logEnroll);
                    exit(); 
                }
                else {
                    header("Location: ../index.php?error=wrongPwd&logEnroll=".$logEnroll);
                    exit(); 
                }
            }
            else{
                header("Location: ../index.php?error=noUser&logEnroll=".$logEnroll);
                exit(); 
            }
        }
    }
}
else{
    header("Location: ../index.php");
    exit();
}