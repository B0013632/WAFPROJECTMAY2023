<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $employees->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $employees->surname }}</p>
</div>

<!-- Employeetype Field -->
<div class="col-sm-12">
    {!! Form::label('employeetype', 'Employeetype:') !!}
    <p>{{ $employees->employeetype }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="col-sm-12">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $employees->dateofbirth }}</p>
</div>

<!-- Pps Field -->
<div class="col-sm-12">
    {!! Form::label('pps', 'Pps:') !!}
    <p>{{ $employees->pps }}</p>
</div>

<!-- Full Time Field -->
<div class="col-sm-12">
    {!! Form::label('full_time', 'Full Time:') !!}
    <p>{{ $employees->full_time }}</p>
</div>

