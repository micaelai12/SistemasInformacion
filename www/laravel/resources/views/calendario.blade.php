<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8' />
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- FullCalendar -->
  <link href='css/fullcalendar.css' rel='stylesheet' />
  <!-- Custom CSS -->
  <style>
    #calendar {
      max-width: 900px;
    }
    .col-centered{
      float: none;
      margin: 0 auto;
    }
  </style>

  <!-- FullCalendar Style -->
  <link href='core/main.css' rel='stylesheet' />
  <link href='daygrid/main.css' rel='stylesheet' />

   <!-- FullCalendar Estilos vistas -->
  <link href='list/main.css' rel='stylesheet' />
  <link href='timegrid/main.css' rel='stylesheet' />
    <!-- FullCalendar Script -->
  <script src='core/main.js'></script>
  <script src='daygrid/main.js'></script>

  <!-- FullCalendar Plugins -->
  <script src='list/main.js'></script>
  <script src='timegrid/main.js'></script>

  <script>
  document.addEventListener('DOMContentLoaded', function(){
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['dayGrid','interaction','timeGrid','list'],
      defaultView:'timeGridDay',
      contentHeight: "auto",
      slotEventOverlap: false,
      editable: true,
      eventLimit: true, // allow "more" link when too many turnos
      selectable: true,
      hiddenDays:[0,1],
      selectHelper: true,
      minTime: '09:00:00', // hora final
      maxTime: '19:00:00',
      header:{
        left: 'prev, next today Miboton',
        center:'title',
        right:'dayGridMonth, timeGridWeek, timeGridDay'
      }
  });
  calendar.render();
  });

</script>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Calendario</a>
          </div>
      </div>
      <!-- /.container -->

  </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
          <div class="registro col-lg-12">
            <div class="modal-header">
              <button type="button" class="close"  onclick = "location.href='menu.php'" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title col-centered" id="myModalLabel">Agenda Turno</h4>
            </div>
            <div id="calendar" class="col-lg-12 col-centered"></div>
            <br>
            <br>
            <div class="modal-footer">
              <br>
            </div>
          </div>
      </div>
    <!-- /.row -->

    <!-- Modal -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form class="form-horizontal" method="POST" action="addEvent.php">

        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Peluquero</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="id_usuario" placeholder="Nombre Peluquero">
          </div>
          </div>
          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Cliente</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="id_cliente" placeholder="Nombre Cliente">
          </div>
          </div>
          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Servicio</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control" placeholder="Servicios Solicitados">
          </div>
          </div>

          <div class="form-group">
          <label for="hora_inicio" class="col-sm-2 control-label">Fecha Inicio</label>
          <div class="col-sm-10">
          <select time="time">
            <option value="9:30">9:30</option>
            <option value="10:00">10:00</option>
          </select>
          </div>
          </div>
          <div class="form-group">
          <label for="hora_fin" class="col-sm-2 control-label">Fecha Fin</label>
          <div class="col-sm-10">
          <select time="time">
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
          </select>
          </div>
          </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
      </div>
    </div>




    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form class="form-horizontal" method="POST" action="editEventTitle.php">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar Evento</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Titulo</label>
          <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="titulo" placeholder="Titulo">
          </div>
          </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
              <label class="text-danger"><input type="checkbox"  name="delete"> Eliminar Evento</label>
              </div>
            </div>
          </div>

          <input type="hidden" name="id_turno" class="form-control" id="id_turno">


        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
      </div>
      </div>
    </div>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

  <!-- FullCalendar -->
  <script src='js/moment.min.js'></script>
  <script src='js/fullcalendar/fullcalendar.min.js'></script>
  <script src='js/fullcalendar/fullcalendar.js'></script>
  <script src='js/fullcalendar/locale/es.js'></script>
</body>
</html>