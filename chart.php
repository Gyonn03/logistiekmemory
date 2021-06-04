<?php
  $con = mysqli_connect("localhost","root","","db_unity_1");
  $sql = "SELECT Tijd FROM tb_data";
  if ($con->connect_errno) {
    printf("Connect failed: %s\n", $con->connect_error);
    exit();
}
if ($result = $con->query($sql)) {
        
}
else {
    printf("Query failed: %s\n", $con->error);
}

  
?>


<html>
<head>

<link href="phplogin/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body>
<h1>Bar grafiek met de beste tijd</h1>
<table border="0" width="100%" cellpadding = "0" cellspacing="0">
<tr>Modus</tr>
  <tr>
    <td width="20%">Geel Beste Tijd</td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">

        <tr>
          <td align="left" bgcolor="yellow" width=
          
          <?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Geel' ORDER BY Tijd ASC
          LIMIT 1";
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
          
          > 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Geel' ORDER BY Tijd ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                  echo gmdate("i:s", $row["Tijd"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?> </td>
          <td align="left">

          
          
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="20%">Groen Beste Tijd</td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
          <td align="left" bgcolor="green" width=<?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Groen' ORDER BY Tijd ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Tijd"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>> 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Groen' ORDER BY Tijd ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo gmdate("i:s", $row["Tijd"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?> </td>
          <td align="left"> 

         
            
          
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="20%">Rood Beste Tijd </td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
          <td align="left" bgcolor="red" width=<?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Rood' ORDER BY Tijd DESC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Tijd"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>> 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Rood' ORDER BY Tijd ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo gmdate("i:s", $row["Tijd"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?> </td>
          <td align="left">

    
          
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="20%">Blauw Beste Tijd </td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
        
          <td align="left" bgcolor="blue" width=<?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Blauw' ORDER BY Tijd ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Tijd"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>> 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Tijd  FROM tb_data WHERE modus = 'Blauw' ORDER BY Tijd ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo gmdate("i:s", $row["Tijd"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>
 
    
  
</table>



<h1>Bar grafiek met de minste fouten</h1>
<table border="0" width="100%" cellpadding = "0" cellspacing="0">
<tr>Modus</tr>
  <tr>
    <td width="20%">Geel Minste Fouten</td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">

        <tr>
          <td align="left" bgcolor="yellow" width=
          
          <?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Geel' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Fouten"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>
          
          > 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Geel' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                  echo( $row["Fouten"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?> </td>
          <td align="left">

          
          
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="20%">Groen Minste Fouten</td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
          <td align="left" bgcolor="green" width=<?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Groen' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Fouten"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>> 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Groen' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo($row["Fouten"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?> </td>
          <td align="left"> 

         
            
          
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="20%">Rood Minste Fouten </td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
          <td align="left" bgcolor="red" width=<?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Rood' ORDER BY Fouten DESC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Fouten"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>> 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Rood' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo($row["Fouten"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?> </td>
          <td align="left">

    
          
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="20%">Blauw Minste Fouten </td> 
    <td width="75%">
      <table border = "0" width = "100%" cellpadding = "1" cellspacing="1">
        <tr>
        
          <td align="left" bgcolor="blue" width=<?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Blauw' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo  $row["Fouten"] ;
              }
            }
          }else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>> 
          </td>
          <td align="left">
          
          <?php
          $sql = "SELECT Fouten  FROM tb_data WHERE modus = 'Blauw' ORDER BY Fouten ASC
          LIMIT 1";
          if ($result = $con->query($sql)) {
            if ($result->num_rows > 0) {
              while ($row = $result-> fetch_assoc()) {
                echo( $row["Fouten"]) ;
              }
            }
          }
          else {
              printf("Query failed: %s\n", $con->error);
          }
          
          
          ?>
          </td>
        </tr>
      </table>
    </td>
  </tr>

    
  
</table>


</body>
</html>

