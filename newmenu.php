<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="newmenu1.css">
</head>
<body style="font-weight:bolder;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
<h1 style="text-align:center;padding:50px;font-size:40px">MENU</h1>
<table class="menu" style="background-color: rgba(245, 245, 245, 0.716);">
	


	<?php
	$conn=mysqli_connect("localhost","root","root","alan");
	$sql="SELECT * FROM menu;";
	$res=mysqli_query($conn,$sql);
	if($res->num_rows >0){
		while($r=mysqli_fetch_assoc($res)){
			echo "<tr><td>".$r['item_id']."."."</td><td>".$r['item_name']."</td><td>".$r['item_rate']."$"."</td><td><img style='width:300px; height:300px;' src=".$r['item_pic']."></td></tr>";
		}
	}else{
		echo "NO DATA";
	}
	$conn->close();
	?>



</table>

</body>
</html>