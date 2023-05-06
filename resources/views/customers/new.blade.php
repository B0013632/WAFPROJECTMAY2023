@extends('layouts.app') 
@section('content')
<form action="/customers" method="post">
    @csrf
    <div>
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" required>
    </div>
    <div>
        <label for="surname">Surname:</label>
        <input type="text" name="surname" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" required>
    </div>
    <div>
        <label for="vip">VIP:</label>
        <input type="checkbox" name="vip" value="1">
    </div>
    <div>
        <label for="comments">Comments:</label>
        <textarea name="comments"></textarea>
    </div>
    <button type="submit">Create</button>
</form>
@endsection 