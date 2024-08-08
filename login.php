<html>
<head>
<title></title>
<body style="padding-left: 120px;">
<?php
$flag=0;
$conn = mysqli_connect("localhost", "root", "root", "alan");
$username = $_POST['Username'];
$password = $_POST['Password'];
$opt=$_POST['job']; 
if($opt==1){
    $pass_query = "SELECT waiter_DOB FROM waiter WHERE waiter_name='$username'";
    $result = mysqli_query($conn, $pass_query);
    if($row = mysqli_fetch_assoc($result)){
        if($row['waiter_DOB'] == $password){
            $flag=1;
        }else {
            $flag=0;
        }
    }else {
        echo "
    <div style='height: 85%;width: 85%;padding-left: 100px;padding-top: 50px;background-color: rgba(245, 245, 245, 0.716);'>
    <h1 style='color: rgba(139, 0, 0, 0.727);padding-left: 428px;'>Username Not Found!</h1>
    </div>
    ";
        exit();
    }
}else{
    $pass_query = "SELECT cashier_DOB FROM cashier WHERE cashier_name='$username'";
    $result = mysqli_query($conn, $pass_query);
    if($row = mysqli_fetch_assoc($result)){
        if($row['cashier_DOB'] == $password){
            $flag=1;
        }else {
            $flag=0;
        }
    }else {
        echo "
    <div style='height: 85%;width: 85%;padding-left: 100px;padding-top: 50px;background-color: rgba(245, 245, 245, 0.716);'>
    <h1 style='color: rgba(139, 0, 0, 0.727);padding-left: 428px;'>Username Not Found!</h1>
    </div>
    ";
        exit();
    }
}
if($flag==1){
    echo "
        <div style='height: 85%;width: 85%;padding-left: 100px;padding-top: 50px;background-color: rgba(245, 245, 245, 0.716);'>
        <h1 style='color: rgba(139, 0, 0, 0.727);text-align:center;'>Login successful!</h1>
        <h1 style='color: black;text-align:center;font-size: 40px;padding-bottom:150px;'>Welcome $username</h1>
        <div style='text-align:center'>
        <a href='loggedin.html' style='text-decoration: underline;color:rgba(245, 245, 245, 0.716) ;padding-left:50px;padding-right:50px;text-decoration:none;font-size:40px;display:inline-block;background-color: rgba(139, 0, 0, 0.727);border-radius:25px;'>Change Dish Rates</a>
        </div>
        </div>
        ";
}else{
    echo "
    <div style='height: 85%;width: 85%;padding-left: 100px;padding-top: 50px;background-color: rgba(245, 245, 245, 0.716);'>
    <h1 style='color: rgba(139, 0, 0, 0.727);padding-left: 428px;'>Incorrect Password!</h1>
    </div>
    ";  
}
    
?>

        
</body>
</head>
</html>




