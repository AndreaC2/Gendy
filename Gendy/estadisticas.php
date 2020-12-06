<?php

$a = Juan

?>





<html>

    <head>
        <meta charset="utf-8">
        <title>Gendy | Estadisticas Negocio</title>
        <link rel="stylesheet" href="css/estadisticas.css">

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var data = google.visualization.arrayToDataTable([['Language', 'Rating'],
        <?php
        if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
              echo "['".$row['name']."', ".$row['rating']."],";
            }
        }
        ?>
        
        ]);
    
    var options = {
        title: 'Días más visitados',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>







    </head>
    <body>
        
            
            <h1>Estadisticas del negocio</h1>
            <div class="cuerpo">
            
            <p>En esta sección encontrará las estadisticas de dias y horas más frecuentes en los que los usuarios visitan su establecimiento.</p>

            <h2>Fecuencia de visitas</h2>
            <br><br>

            
            <div id="piechart"></div>



            <h2>Fecuencia de horarios</h2>
            <br><br>


            </div>

    </body>
</html>