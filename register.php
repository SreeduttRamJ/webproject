<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <title> Register </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div clas="header">
        <h1>REGISTRATION</h1>
    </div>

    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input -group">
            <label>USERNAME</label>
            <input type="text" name="username" value="<?php echo $username ; ?>">
        </div>
        <div class="input -group">
            <label>PASSWORD</label>
            <input type="text" name="password">
        </div>
        <div class="input -group">
            <label>CONFIRM PASSWORD</label>
            <input type="text" name="conpassword" >
        </div>
        <div class="input -group">
            <button type="submit" class="btn" name="reguser">REGISTER</button>
        </div>
        <p> IF YOU ARE A MEMBER <a href="login.php">log in</a></p>
    </form>
</body></html>
