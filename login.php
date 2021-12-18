<?php
include'loginsubmit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Login Form</title>
<link href="signup.css" rel="stylesheet"/>
</head>
    <body>
        <div class="main">
            <div class="sign">
        <h2 class="ssign">Login</h2>
            <form method="POST" action="loginsubmit.php">
            <label class="lable"> Email: </label>
                <input class="for" type="text" name="email"/>
            <label class="lable"> Password:</label> 
                <input class="for" type="password" name="password"/>
            
                <button type="submit" class="butnn" >Login</button>

                <p class="link"> Don't have account?<a href="signup.php">Sign Up</a></p>
        </form>
        
</div>
</div>
    </body>
</html>
