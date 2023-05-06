<!-- Customer Id Field -->
<div class="col-sm-12">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    <p>{{ $orders->customer_id }}</p>
</div>

<!-- Employee Id Field -->
<div class="col-sm-12">
    {!! Form::label('employee_id', 'Employee Id:') !!}
    <p>{{ $orders->employee_id }}</p>
</div>

<!-- Order Description Field -->
<div class="col-sm-12">
    {!! Form::label('order_description', 'Order Description:') !!}
    <p>{{ $orders->order_description }}</p>
</div>

<!-- Table Id Field -->
<div class="col-sm-12">
    {!! Form::label('table_id', 'Table Id:') !!}
    <p>{{ $orders->table_id }}</p>
</div>

<!-- Order Date Field -->
<div class="col-sm-12">
    {!! Form::label('order_date', 'Order Date:') !!}
    <p>{{ $orders->order_date }}</p>
</div>

<!-- Order Time Field -->
<div class="col-sm-12">
    {!! Form::label('order_time', 'Order Time:') !!}
    <p>{{ $orders->order_time }}</p>
</div>

<!-- Total Field -->
<div class="col-sm-12">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $orders->total }}</p>
</div>

