<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $drinks->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $drinks->description }}</p>
</div>

<!-- Alcohol Field -->
<div class="col-sm-12">
    {!! Form::label('alcohol', 'Alcohol:') !!}
    <p>{{ $drinks->alcohol }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $drinks->price }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $drinks->image }}</p>
</div>

