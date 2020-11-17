@extends('layouts.app')
@section('scripts')
<link rel="stylesheet" href="{{ asset('fullcalendar/core/main.css') }}">
<link rel="stylesheet" href="{{ asset('fullcalendar/daygrid/main.css') }}">
<link rel="stylesheet" href="{{ asset('fullcalendar/list/main.css') }}">
<link rel="stylesheet" href="{{ asset('fullcalendar/timegrid/main.css') }}">
<script src="{{ asset('fullcalendar/core/main.js') }}" defer></script>
<script src="{{ asset('fullcalendar/interaction/main.js') }}" defer></script>
<script src="{{ asset('fullcalendar/daygrid/main.js') }}" defer></script>
<script src="{{ asset('fullcalendar/list/main.js') }}" defer></script>
<script src="{{ asset('fullcalendar/timegrid/main.js') }}" defer></script>
<script>
  document.addEventListener('DOMContentLoaded', function(){
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['dayGrid','interaction','timeGrid','list'],
      defaultView:'timeGridWeek',
      hiddenDays: [0,1],
      allDaySlot : false,
      minTime: "09:00",
      maxTime: "19:00",
      slotDuration: "00:30:00",
      header:{
        left: 'prev, next today Miboton',
        center:'title',
        right:'dayGridMonth, timeGridWeek, timeGridDay'
      },
      dateClick: function(info) {
      $('#ModalAdd').modal();
    }
  });
  calendar.setOption('locale','Es');
  calendar.render();
  });
</script>

@endsection

@section('content')
<div class="row">
<div class="col"></div>
<div class="col-8"><div id="calendar"></div></div>
<div class="col"></div>
</div>

    <!-- Modal -->
<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Turno</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
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
              <input type="text" name="title" class="form-control" placeholder="Nombre Cliente">
            </div>
          </div>
          <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Servicio</label>
            <div class="col-sm-10">
              <input type="text" name="title" class="form-control" placeholder="Servicios Solicitados">
            </div>
          </div>
          <label for="fecha_turno" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-10">
              <input class="form-control" type="date" name="fecha_turno" id="fecha_turno">
          </div>
          <div class="form-group">
            <label for="hora_turno" class="col-sm-2 control-label">Horario</label>
            <div class="col-sm-10">
                <input class="form-control" type="time" name="hora_turno" id="hora_turno">
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
@endsection
