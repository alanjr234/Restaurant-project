
<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your code to handle form data insertion into the database
    
    // Redirect to loggedin.php
    header("Location: loggedin.php");
    exit(); // Make sure to exit after redirection to prevent further execution
}
?>

<html>
<head>
<title></title>
</head>
<body style="padding-left: 250px;padding-top: 80px;">
<div style="height: 90%;width: 80%; background-color:rgba(245, 245, 245, 0.716);">
    <h1 style="text-align:center;padding:50px;font-size:40px;color: rgba(139, 0, 0, 0.727);" >LOGIN</h1>
    <form style="padding-left: 270px;font-size: 30px;" action="http://localhost/alan/restaurant/login.php" method="POST">
        Enter Username : &ensp;<input type="text"  name ="Username" style="border-radius: 20px;height: 33px;padding-left: 30px;padding-right: 30px;"><br><br>
        Enter Password : &ensp;<input type="password" name="Password" style="border-radius: 20px;height: 33px;padding-left: 30px;padding-right: 30px;"><br><br>  
        <div style="padding-left: 100px;padding-top: 30px;">
        <input type="submit" value="Submit" style="border-width: 0px;border-radius: 25px;height: 33px;padding-left: 100px;padding-right: 100px;background-color: rgba(139, 0, 0, 0.727);">
        </div>
    </form>
    <div style="padding-left: 410px;">
        Are you new?<a href="signup.html" style="font-size: 18px;">SIGNUP</a>
    </div>
</div>

</body>
</html>