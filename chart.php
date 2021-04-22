
<html>
<body>
<table>
<tr> 
<th>User Id </th>
<th>Score </th>
<th>Tijd  </th>
</tr>
<h1>Bar grafiek met de hoogste score</h1>
<?php
  $con = mysqli_connect("localhost","root","","db_unity");
  $sql = 'SELECT * FROM tb_dat';
  $result = $con-> querry($sql);
  if($con){
    echo("connected");
  }
if ($result->num_rows > 0) {
  while ($row = $result-> fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["score"] . "</td><td>" . $row["Time"] . "</td>"
  }
}
?>
</html>