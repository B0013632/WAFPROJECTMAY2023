<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <select name="customer_id" class="form-control">
			<option value=""disabled selected>Select your Customer ID</option>
		@foreach ($customers as $customer)
			<option value="{{ $customer->id }}">{{ $customer->id }}</option>
		@endforeach
	</select>
</div>


<!-- Order Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_description', 'Order Description:') !!}
    {!! Form::text('order_description', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Table Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('table_id', 'Table Id:') !!}
        <select name="table_id" class="form-control">
		<option value=""disabled selected>Select your Table Number</option>
		@foreach ($tables as $table)
			<option value="{{ $table->id }}">{{ $table->id }}</option>
		@endforeach
	</select>
</div>


    <!-- Order Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_date', 'Order Date:') !!}
    {!! Form::date('order_date', null, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD']) !!}
</div>


<!-- Order Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('order_time', 'Order Time:') !!}
    <input type="time" id="order_time" name="order_time">
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>