<?php
  $con = mysqli_connect("localhost","root","","db_unity");


  
?>
<h1>Bar grafiek met de hoogste score</h1>
<table border="0" width="100%" cellpadding = "0" cellspacing="0">
<tr>Modus</tr>
    <td width="20%">Blauw Beste Score </td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
        
          <td align="left" bgcolor="blue" width="81.88"> </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Tijd FROM tb_data WHERE modus ='Blauw'";
        if ($result = $con->query($sql)) {
          if ($result->num_rows > 0) {   
            while ($row = $result-> fetch_assoc()) {
              echo  $row["Tijd"] ;
            }
          }
        }else {
            printf("Query failed: %s\n", $con->error);
        }
          
          
          ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <td align="right">Tijd over -->
          </td>
</table>


<?php
$temp = 89 / 300 * 276;
echo($temp);
?>