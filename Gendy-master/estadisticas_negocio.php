<?php

require_once 'DataBase.php';
session_start();
$c=$_SESSION['user'];

    $sql = "SELECT * FROM cita WHERE `DIA_CITA`='Lunes' AND `ID_NEGOCIO`=$c";
    $lun=$DB->prepare($sql);
    $lun->setFetchMode(PDO::FETCH_ASSOC);
    $lun->execute();

    $sql1 = "SELECT * FROM cita WHERE `DIA_CITA`='Martes' AND `ID_NEGOCIO`=$c";
    $mar=$DB->prepare($sql1);
    $mar->setFetchMode(PDO::FETCH_ASSOC);
    $mar->execute();

    $sql2 = "SELECT * FROM cita WHERE `DIA_CITA`='Miercoles' AND `ID_NEGOCIO`=$c";
    $mier=$DB->prepare($sql2);
    $mier->setFetchMode(PDO::FETCH_ASSOC);
    $mier->execute();

    $sql3 = "SELECT * FROM cita WHERE `DIA_CITA`='Jueves' AND `ID_NEGOCIO`=$c";
    $jue=$DB->prepare($sql3);
    $jue->setFetchMode(PDO::FETCH_ASSOC);
    $jue->execute();

    $sql4 = "SELECT * FROM cita WHERE `DIA_CITA`='Viernes' AND `ID_NEGOCIO`=$c";
    $vier=$DB->prepare($sql4);
    $vier->setFetchMode(PDO::FETCH_ASSOC);
    $vier->execute();

    $sql5 = "SELECT * FROM cita WHERE `DIA_CITA`='Sabado' AND `ID_NEGOCIO`=$c";
    $sab=$DB->prepare($sql5);
    $sab->setFetchMode(PDO::FETCH_ASSOC);
    $sab->execute();

    $sql6 = "SELECT * FROM cita WHERE `DIA_CITA`='Domingo' AND `ID_NEGOCIO`=$c";
    $dom=$DB->prepare($sql6);
    $dom->setFetchMode(PDO::FETCH_ASSOC);
    $dom->execute();

    $Lunes=$lun->rowCount();
    $Martes=$mar->rowCount();
    $Miercoles=$mier->rowCount();
    $Jueves=$jue->rowCount();
    $Viernes=$vier->rowCount();
    $Sabado=$sab->rowCount();
    $Domingo=$dom->rowCount();    

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

        var data = google.visualization.arrayToDataTable([
          ['Dia Cita', 'Hora de la cita'],
          ['Lunes',   <?php echo($Lunes) ?>],
          ['Martes',      <?php echo($Martes) ?>],
          ['Miercoles',  <?php echo($Miercoles) ?>],
          ['Jueves', <?php echo($Jueves) ?>],
          ['Viernes',      <?php echo($Viernes) ?>],
          ['Sabado',  <?php echo($Sabado) ?>],
          ['Domingo',    <?php echo($Domingo) ?>]
        ]);


    
        var options = {
            title: 'Días más visitados',
            width: 700,
            height: 400,
        };
    
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
        chart.draw(data, options);
        }

</script>

</head>
    <body>
            <?php echo($horas->num_rows); ?>
            <h1>Estadisticas del negocio</h1>

            <div class="cuerpo">
            
                <p>
                En esta sección encontrará las estadisticas de su establecimiento. Podrá observar el número
                de visitas por día, y el porcentaje que esto representa.
                </p>

                <h2>Fecuencia de visitas</h2>

                <div id="piechart"></div>

                </div>
                <br>

                <form action="MenuNegocio.php" >
                        <input class="boton_volver" type="submit" value="Volver" name='Volver' onclick="" />
                </form>
            </div>
    </body>
</html>