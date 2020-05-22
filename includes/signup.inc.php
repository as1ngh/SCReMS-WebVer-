<?php
    if(isset($_POST['btnSubmit'])){
        require 'dbh.inc.php';
        $newEnroll=$_POST['newEnroll'];
        $newEmail=$_POST['newEmail'];
        $newPassword=$_POST['newPassword'];
        $newConfirmPassword=$_POST['newConfirmPassword'];
        if(empty($newEnroll)||empty($newEmail)||empty($newPassword)||empty($newConfirmPassword)){
            header("Location: ../createAccount.php?error=emptyfield&newEnroll=".$newEnroll."&newEmail=".$newEmail);
            exit();
        }else{
            if($newPassword!==$newConfirmPassword){
                header("Location: ../createAccount.php?error=passwordCheck&newEnroll=".$newEnroll."&newEmail=".$newEmail);
                exit();
            }
            else{
                $sql="SELECT userEnroll FROM users WHERE userEnroll=?;";
                $stmt= mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../createAccount.php?error=sqlError1&newEnroll=".$newEnroll."&newEmail=".$newEmail);
                    exit(); 
                }
                else{
                    mysqli_stmt_bind_param($stmt,"s",$newEnroll);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $resultCheck=mysqli_stmt_num_rows($stmt);
                    if($resultCheck>0){
                        header("Location: ../createAccount.php?error=alreadyExist&newEnroll=".$newEnroll."&newEmail=".$newEmail);
                        exit();
                    }
                    else{
                        $sql="INSERT INTO users (userEnroll, userEmail, userPassword) VALUES (?, ?, ?);";
                        $stmt= mysqli_stmt_init($conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            header("Location: ../createAccount.php?error=sqlError2&newEnroll=".$newEnroll."&newEmail=".$newEmail);
                            exit(); 
                        }
                        else{
                            $hashedPassword=password_hash($newPassword,PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt,"sss",$newEnroll,$newEmail,$hashedPassword);
                            mysqli_stmt_execute($stmt);
                            header("Location:  ../index.php?signup=success");
                        }
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
    }
    else{
        header("Location:  ../createAccount.php");
    }
