<?php
    $email = '';
    $password = '';
    $errors = array('email'=> '', 'password'=> '');

    //LOGIN   
    if(isset($_POST['submit_logIn'])){
        require 'db.php';

        $email =$_POST['email'];
        $password =$_POST['password'];
        
        if (empty($email)){
            $errors['email']= 'An email is required </br>';
        }
        else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'email must be a valid email address </br>';
            }
                        
        }

        //password
        if (!empty($password)){
            if (strlen($_POST["password"]) <= 8) {
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
        }
        else{
            $errors['password'] = 'A password is required';
        }

        if(!array_filter($errors)){
            $sql = "SELECT * FROM users WHERE  emailUsers='$email' AND pwdUsers ='$password' AND roles = 'employee'";
            $result = mysqli_query($conn,$sql);
            $manager_sql = "SELECT * FROM users WHERE  emailUsers='$email' AND pwdUsers ='$password' AND roles = 'manager'";
            $result2 = mysqli_query($conn, $manager_sql);
            if (mysqli_num_rows($result) == 1){
                header('Location: order.php');                
            }
            else if(mysqli_num_rows($result2) == 1){
                header('Location: closingFinan.php');
            }
            else{
                echo "<script>alert('User added sucessfully')</script>";
                header("Location: index.php?error=worngpassword");
            }
            
        }        
        
        
    }

    if(isset($_POST['submit_signIn'])){
        header('Location: signUp.php');
    }

    


?>