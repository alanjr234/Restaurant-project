<html>
<head><title></title></head>
<body style="padding-left: 20%;padding-top: 70px;">
<div style="height: 90%;width: 80%; background-color:rgba(245, 245, 245, 0.716);">


<?php 
$conn=mysqli_connect("localhost","root","root","alan");
$dish="'".$_POST['dishname']."'";
$rate=$_POST['rate'];
$checkdish="SELECT count(*) FROM menu WHERE $dish in (SELECT item_name FROM menu);";
$coun=mysqli_query($conn,$checkdish);
$res=mysqli_fetch_assoc($coun);
$count=$res['count(*)'];
if($count>0){
    $query="UPDATE menu SET item_rate=$rate WHERE item_name=$dish;";
    $sql=mysqli_query($conn,$query);
    if($sql){
        echo  "<div style='padding-top:140px;'><h1 style='text-align:center;padding:50px;font-size:40px;color: rgba(139, 0, 0, 0.727);'>" ."Rate Upadated successfully!!"."</h1></div>";
    }else{
        echo "Counld not Update Rate";
    }
}else{
    echo "Dish Not Found!";
}
?>


</div>
</body>
</html>