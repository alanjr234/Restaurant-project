<html>
    <head>
        <style>
            table
            {
                border-style:solid;
                border-width:2px;
                border_color:brown;
            }
            </style>
            </head>
            <body background-color="lightyellow">
            <table border='1'>
               <tr>
               <th>Cashier ID</th>
               <th>Cashier Name</th>
               <th>Cashier DOB</th>
               </tr>
                <?php
                $con=mysqli_connect();
                
               $sql="SELECT *FROM ";
               $res=mysqli_query($con,$sql);
               while($row=mysqli_fetch_array($res))
               {
                echo "<tr>";
                echo "<td>" . $row[cashier_id] . "</td>";
                echo "<td>" . $row[cashier_name] . "</td>";
                echo "<td>" . $row[cashier_DOB] . "</td>";
                echo "</tr>";
               }
               echo "</table>";
               mysql_close($con);
               ?>
</body>
</html>