<?php
require_once 'DataBase.php';
session_start();
$c=$_SESSION['user'];

    $sql = "SELECT `RAZON_SOCIAL` FROM gendy.negocio WHERE `ID_NEGOCIO`=$c";
    $nombre_neg=$DB->prepare($sql);
    $nombre_neg->setFetchMode(PDO::FETCH_ASSOC);
    $nombre_neg->execute();

?>

<html>

    <head>

        <meta charset="utf-8">
        <title>Gendy | Calendario Negocio</title>
        <link rel="stylesheet" href="css/calendario.css">

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="js/moment.min.js"></script>

        <link rel="stylesheet" href="css/fullcalendar.min.css">
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/es.js"></script>


        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>


        

    </head>

        <body>
            

            <div class="titulo">
                <h1>Calendario de 
                <?php
                        while ($nom = $nombre_neg->fetch()){
                            echo ($nom["RAZON_SOCIAL"]);
                        }                
                    ?>
                </h1>
            </div>



            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-7"><div id="CalendarioWeb"></div></div>
                    <div class="col"></div>
                </div>
            </div>




            

            <script>
                $(document).ready(function(){
                    $('#CalendarioWeb').fullCalendar({
                        header:{
                            left:'prev,next',
                            center:'title',
                            right: 'month,agendaWeek,agendaDay,today'
                        },

                        dayClick:function(date,jsEvent,view){
                            alert("El valor es: "+date.format());
                            

                        }


                    });
                });

            </script>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>

     

                
            <br>    
            <form action="MenuNegocio.php" >
                        <input class="boton_volver" type="submit" value="Volver" name='Volver' onclick="" />
            </form>

            

            

        </body>
        
</html>