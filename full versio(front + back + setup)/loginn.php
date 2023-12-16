<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Login page</title>
</head>
<body style="background-image:  url('DESKTOP.jpg')">
   <div class="main">
<img src="logoo.png" alt="">
<h2 class="itali">Welcome</h2>
<form action="login.php" method="POST">


<div class="inp">
<h4>Email</h4>
<input name="email" class="inpp" type="text" placeholder="Email">
</div>
<div class="inp">
    <h4>Password</h4>
    <input name="password" class="inpp" type="password" placeholder="Password">
    </div>
    <div style="margin-top: 40px;   width: 350px; display: flex; justify-content: center;">
        <div class="submit">
            <input type="submit" value="Log in" style="border: none; width: 100px; background-color: transparent;"></input>
           </div>
    </div>
 
    </form>
   </div> 

   

</body>
</html>