@extends('layouts.app') 
@section('content')
<form action="/customers" method="post">
    @csrf
     Enter your first name:<input type="text" name="firstname"><br> 
     Enter your surname:<input type="text" name="surname"><br> 
	 Enter your email:<input type="text" name="email"><br> 
	 Enter your phone:<input type="text" name="phone"><br> 
	 Enter your vip:<input type="checkbox" name="vip" value="1"><br> 
	 Enter your comments:<input type="text" name="comments"><br> 
    <button type="submit">Create</button>
</form>
@endsection 