<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0"  >

<?php
$conn = mysqli_connect("localhost", "root", "", "jio") or die("connection faild");
$sql = "select * from reacharge";
$result = mysqli_query($conn, $sql) or die("query failod");

echo "<center><table border= '1'  >
   <tr>
        <td><p style='color:blue;'>name</p></td>
        <td><p style='color:blue;'>phone</p></td>
 </tr>
              </center>  ";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</html>