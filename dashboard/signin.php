<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

		// Check if the user exists in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		$adauth = $row['adminauth'];
		 // Redirect to user dashboard pages
        if ($rows == 1 && $adauth == 1) {
			$_SESSION['username'] = $username;
			
			header("Location: admindashboard.php");	
		}
			elseif($rows == 1 && $adauth == 1){			
			
            header("Location: dashboard.php");
			
            
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Sign in</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="signin">
        <h1 class="-title">Sign in</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Sign in" name="submit" class="-button"/>
        <p class="link"><a href="signup.php">or click here to Sign up</a></p>
  </form>
<?php
    }
?>
</body>
</html>