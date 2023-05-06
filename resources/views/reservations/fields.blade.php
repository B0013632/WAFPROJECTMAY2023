<!-- Table Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_id', 'Table Id:') !!}
    <select name="table_id" class="form-control">
	<option value=""disabled selected>Select your Table ID</option>
		@foreach ($tables as $table)
			<option value="{{ $table->id }}">{{ $table->id }}</option>
		@endforeach
	</select>
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <select name="customer_id" class="form-control">
	<option value=""disabled selected>Select your Customer ID?</option>
		@foreach ($customers as $customer)
			<option value="{{ $customer->id }}">{{ $customer->id }}</option>
		@endforeach
	</select>
</div>

<!-- Reservationdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reservationDate', 'Reservationdate:') !!}
    {!! Form::text('reservationDate', null, ['class' => 'form-control','id'=>'reservationDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#reservationDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Reservationtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reservationTime', 'Reservationtime:') !!}
    {!! Form::text('reservationTime', null, ['class' => 'form-control']) !!}
</div>

<!-- Partysize Field -->
<div class="form-group col-sm-6">
    {!! Form::label('partySize', 'Partysize:') !!}
    {!! Form::number('partySize', null, ['class' => 'form-control']) !!}
</div>

<!-- Specialrequests Field -->
<div class="form-group col-sm-6">
    {!! Form::label('specialRequests', 'Specialrequests:') !!}
    {!! Form::text('specialRequests', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>