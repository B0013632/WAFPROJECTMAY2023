<!-- Table Id Field -->
<div class="col-sm-12">
    {!! Form::label('table_id', 'Table Id:') !!}
    <p>{{ $reservations->table_id }}</p>
</div>

<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $reservations->customer_id }}</p>
</div>

<!-- Reservationdate Field -->
<div class="col-sm-12">
    {!! Form::label('reservationDate', 'Reservationdate:') !!}
    <p>{{ $reservations->reservationDate }}</p>
</div>

<!-- Reservationtime Field -->
<div class="col-sm-12">
    {!! Form::label('reservationTime', 'Reservationtime:') !!}
    <p>{{ $reservations->reservationTime }}</p>
</div>

<!-- Partysize Field -->
<div class="col-sm-12">
    {!! Form::label('partySize', 'Partysize:') !!}
    <p>{{ $reservations->partySize }}</p>
</div>

<!-- Specialrequests Field -->
<div class="col-sm-12">
    {!! Form::label('specialRequests', 'Specialrequests:') !!}
    <p>{{ $reservations->specialRequests }}</p>
</div>

