<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Employeetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('employeetype', 'Employeetype:') !!}
    {!! Form::text('employeetype', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::text('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Pps Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pps', 'Pps:') !!}
    {!! Form::text('pps', null, ['class' => 'form-control','maxlength' => 12,'maxlength' => 12]) !!}
</div>

<!-- Full Time Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('full_time', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('full_time', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('full_time', 'Full Time', ['class' => 'form-check-label']) !!}
    </div>
</div>
