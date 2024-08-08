<html>
<head>
<title></title>
<body style="padding-left: 120px;">

<?php

$conn=mysqli_connect("localhost","root","root","alan");
$username="'".$_POST['Username']."'";
$password="'".$_POST['Password']."'";
$confirm="'".$_POST['Confirm']."'";
$opt=$_POST['job']; 
if($password==$confirm){
    if($opt==1){
        $max="SELECT MAX(waiter_id) FROM waiter;";
        $res=mysqli_query($conn,$max);
        $temp=mysqli_fetch_assoc($res);
        $id=$temp['MAX(waiter_id)']+1;
        $sql="INSERT INTO waiter(waiter_id,waiter_name,waiter_DOB) values($id,$username,$password);";
        $res=mysqli_query($conn,$sql);
    }
    if($opt==2){
        $max="SELECT MAX(cashier_id) FROM cashier;";
        $res=mysqli_query($conn,$max);
        $temp=mysqli_fetch_assoc($res);
        $id=$temp['MAX(cashier_id)']+1;
        $sql="INSERT INTO cashier(cashier_id,cashier_name,cashier_DOB) values($id,$username,$password);";
        $res=mysqli_query($conn,$sql);
    }
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
    echo "Confirmed Password doesn't match with Created Password";
}

?>