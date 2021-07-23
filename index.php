<?php
    require 'includes/userAuth.php';
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
            <p class='author'>@bartHeart</p>
        </div>
    </div>

    <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form id="logIn" action="index.php" method="POST">
                    <div class="form-group">
                        <h1>Log In</h1>
                        <label for="email">Email or Username</label>
                        <input id="email" type="text" name="email" value = "<?php echo $email?>">
                        <div class="err"><?php echo $errors['email'] ?></div>
                    </div>
                    <div class="form-group">
                        <label for="passWord">Password</label>
                        <input id="password" name="password" type="password" value = "<?php echo $password?>">
                        <div class="err"><?php echo $errors['password'] ?></div>
                    </div>
                    <input type="submit" value="submit" name="submit_logIn" class="btn btn-black" onClick="setTimeout( MM_validateForm, 1000 )" >  
                    <input type="submit" value="Sign Up" name="submit_signIn" class="btn btn-secondary" onClick="" >                             
                </form>        
            </div>
        </div>
    </div>

   

    <?php
        include ('templates/footer.php');     
    ?>

    
    
</html>