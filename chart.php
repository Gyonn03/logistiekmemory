  <?php
  $con = mysqli_connect("localhost","root","","db_unity");
  if($con){
    echo("connected");
  }
?>
<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  google.charts.load('current', {'packages':['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawChart);
  
  function drawChart() {
        var data = google.visualization.arrayToDataTable['id', 'score','time']    
        };
        </script>
<?php
                        if ($result = $con -> query("SELECT * FROM tb_dat")) {
                          echo "Returned rows are: " . $result -> num_rows;
                          // Free result set
                          $result -> free_result();
                          
                        }   
                        
                        

                    ?>  
                    <script>
                    var options = {
          chart: {
            title: 'Score Leerlingen',
            subtitle: '' 
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };
        
        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

         chart.draw(data, google.charts.Bar.convertOptions(options));
         </script>
<div class="row">
  <div class="col-md-12" style="padding-left:3px; padding-right:3px">
    <div id="chart_div" style="width: 100%; height: 420px;"></div>
  </div>
</div>    

<div class="row">
  <div class="col-md-4" style="margin-left:10px; padding-left:3px; padding-right:3px">
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </div>    
</div>
</html>