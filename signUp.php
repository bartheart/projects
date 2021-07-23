<?php
    require 'includes/addUser.php';
    
?>

<!DOCTYPE html>
<html lang="en">

    <?php
        include ('templates/headerInd.php');     
    ?>

    
    <div class="sidenav">
        <div class="login-main-text">
            <h1>T&L Foodstore<br> Login Page</h1>
            <p>Login or SignUp from here to access.</p>
        </div>
    </div>

    <div>
    <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form id="signUp" action="signUp.php" method="POST">
                    <h1>Sign Up</h1>
                    <div class="form-group">
                        <label for="userName">Username</label>
                        <input id="userName" type="text" name="userName" value= "<?php echo $userName?>">
                        <div class="err"><?php echo $errors['userName'] ?></div>
                    </div>
                    <div class="form-group">
                        <label for="email_1">Email</label>
                        <input id="email_1" type="text" name="email" value= "<?php echo $email?>">
                        <div class="err"><?php echo $errors['email'] ?></div>
                    </div>
                    <div class="form-group">
                        <label for="password_1">Password</label>
                        <input id="password_1" type="password" name="password" value="<?php echo $password?>" >
                        <div class="err"><?php echo $errors['password'] ?></div>
                    </div>
                    <div class="form-group">
                        <label for="role">Select Position</label>
                        <select id="role" name="role" value="<?php echo $role?>">
                            <option value="manager">Manager</option>
                            <option value="employee">Employee</option>
                        </select>
                        <div class="err"><?php echo $errors['role'] ?></div>
                    </div>
                    <input type="submit" value="submit" name="submit_signUp" class="btn btn-black">
                
                
                </form>        
            </div>
        </div>
    </div>
   

    <?php
        include ('templates/footer.php');     
    ?>

    
    
</html>