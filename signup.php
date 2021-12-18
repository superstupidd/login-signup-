<?php
include('conf.php');
?>
<!DOCTYPE html>
<html lang="en">
<head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>signup</title>
<link href="signup.css" rel="stylesheet"/>
</head>
<div class="main">

<div class="sign">
          <div class="fsign"><h2 class="ssign">Sign Up</h2></div>

         
            <form action="conf.php" method="POST" >
                <div class="form group">
    
                <label class="lable">Userame:</label>
                <input class="for" type="username" placeholder=" username" name="username">
            </div>
            
            <div class="form-group">
                <label class="lable">Email:</label>
                <input class="for" type="email" placeholder=" email" name="email">
            </div>
            
            <div class="form-group">
                <label class="lable">Password:</label>
                <input class="for" type="password" placeholder=" password" name="password">
            </div>
            
                <button type="signup" name="signup" class="butnn">Sign Up</button>
            
                <p class="link">Already have account?<a href="login.php">Log In</a></p>

        </form>
       
</div>
</div>


<script
    src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script
    src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/pooper.min.cs"></script>
</script>
<script
    src="http://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" >
</script>

</html>