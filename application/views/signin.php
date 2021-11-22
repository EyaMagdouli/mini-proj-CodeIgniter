<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
</head>
<body>
    <h1>Sign in</h1>
    <form method="post" action="<?php echo site_url('Login/savingdata'); ?>"> 
    <?php
        echo form_open('Login/signin_validation');
        echo validation_errors();
        echo "<p>Username:";
        echo form_input('username');
        echo"</p>";
        echo "<p>Password:";  
        echo form_password('password');  
        echo "</p>";  
    
        echo "<p>Confirm Password:";  
        echo form_password('cpassword');  
        echo "</p>";  
    
        echo "<p>";  
        echo form_submit('signin_submit', 'Sign In');  
        echo "</p>";  
        echo form_close(); 
    ?>
    </form>
</body>
</html>