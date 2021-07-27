<?php
    $userName ='';
    $email ='';
    $password ='';
    $rePassword = '';
    $role ='';
    $errors = array('userName'=>'', 'email'=> '', 'password'=> '', 'rePassword'=> '', 'role'=> '');
    //SIGNUP  
    if(isset($_POST['submit_signUp'])){

        require 'db.php';

        $userName =$_POST['userName'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $role =$_POST['role'];
        $rePassword = $_POST['rePassword']; 
        

        if(empty($userName)){
            $errors['userName'] = 'A username is required';
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/", $userName)){
                $errors['userName'] = 'Username must be letters only';
        }              
        else if (empty($email)){
            $errors['email']= 'An email is required </br>';
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address </br>';  
        }
        //password
        else if (!empty($password)){
            if (strlen($password) <= 8) {
                $errors['password'] = "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $errors['password'] = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $errors['password'] = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                $errors['password'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
            } 
            else if($password != $rePassword){
                $errors['rePassword']="The password entry doesnt match!";
            }
        }
        else if (empty($password)){
            $errors['password'] = 'A password is required';
        }

        /* //role
        if (empty($_GET('role'))){
            $errors['role'] = "A role is required";
        } */
        if(!array_filter($errors)){
            $sql ="SELECT * FROM users WHERE  emailUsers='$email' AND pwdUsers ='$password'";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) == 1){
                echo "<script>alert('Email already in')</script>";
                
            }
            else{
                $sql = "INSERT INTO  users (userName, emailUsers, pwdUsers, roles) VALUES ('$userName', '$email', '$password', '$role')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "<script>alert('User added sucessfully')</script>";
                    header("Location: index.php");
            }
        } 
            
        

        /* else {
            $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../signUp.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0){
                    header("Location: ../signUp.php?error=usertaken&mail=".$email);
                    exit();
                }
                else{
                    $sql = 'INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)';
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../signUp.php?error=sqlerror");
                        exit();
                    }
                    else{
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signUp.php?signup=sucess");
                        exit();
                    }
                }
            }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
            if(!array_filter($errors)){
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0){
                    header("Location: ../signUp.php?error=usertaken&mail=".$email);
                    exit();
                }
                else{
                    $sql = 'INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)';
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("Location: ../signUp.php?error=sqlerror");
                        exit();
                    }
                    else{
                        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signUp.php?signup=sucess");
                        exit();
                    }
                }
            }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
            
        } */
    }           

        
    }
?>