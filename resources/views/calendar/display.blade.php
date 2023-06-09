@extends('layouts.app') 
@section('content') 
@include('calendar.assets')
@include('calendar.modalreservation')
<div id="calendar" ></div> 
<script> 
    document.addEventListener('DOMContentLoaded', function() { 
        var calendarEl = document.getElementById('calendar'); 
        var calendar = new FullCalendar.Calendar(calendarEl, { 
          plugins: [ 'dayGrid', 'timeGrid', 'list', 'interaction' ],
          header: { left: 'prev,next today', center: 'title', right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek' }, 
          slotDuration: '00:10:00', 
          defaultDate: '2023-05-08', 
          editable: true, 
          eventLimit: true, // allow "more" link when too many events   
          events: '{{ route('calendar.json') }}',
		  dateClick: function(info) {
            $('#starttime').val(info.date.toISOString().substring(11,16));
            $('#reservationsDate').val(info.date.toISOString().substring(0,10));
            $('#fullCalModal').modal('show');
 }
     }); 
     calendar.render(); }); 
</script> 
@endsection 