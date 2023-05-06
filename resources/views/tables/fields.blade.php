<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Booked Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('booked', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('booked', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('booked', 'Booked', ['class' => 'form-check-label']) !!}
    </div>
</div>
