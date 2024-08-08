<html>
    <head>
    <link rel="stylesheet" href="cashier1.css">
        <style>
            table
            {
                border-style:solid;
                border-width:2px;
                border_color:brown;
            }
            </style>
            </head>
            <body style="font-weight:bolder;padding-top:30px">
            <h1 style="text-align:center;padding-top:50px;font-size:40px">CASHIER</h1><br><br><br>
            <table  class="menu" >
               <tr>
               <th>ID</th>
               <th>Name</th>
               <th>DOB</th>
               </tr>
                <?php
                $con=mysqli_connect("localhost","root","root","alan");
                
               $sql="SELECT * FROM cashier";
               $res=mysqli_query($con,$sql);
               while($row=mysqli_fetch_array($res))
               {
                echo "<tr>";
                echo "<td>" . $row['cashier_id'] . "</td>";
                echo "<td>" . $row['cashier_name'] . "</td>";
                echo "<td>" . $row['cashier_DOB'] . "</td>";
                echo "</tr>";
               }
               echo "</table>";
               mysqli_close($con);
               ?>
</body>
</html>