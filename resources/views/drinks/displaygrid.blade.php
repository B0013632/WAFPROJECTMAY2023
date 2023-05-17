@extends('layouts.app')
@section('content')
<div style="padding-top:7%" class="container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <ul class="list-inline nav navbar-nav navbar-right">
                <li>
                    <button id="emptycart" type="button" class="btn btn-primary navbar-btn">Empty Cart</button>
                </li>
                <li>
                    <button id="checkOut" onclick="window.location.href=''" type="button" class="btn btn-primary navbar-btn">Check Out</button>
                </li>
                <li>
                    <span style="font-size:40px;margin-right:0px;" class="glyphicon glyphicon-shopping-cart navbar-btn"></span>
                </li>
                <li>
                    <div class="navbar-text" id="shoppingcart" style="font-size:12pt;margin-left:0px;margin-right:0px;"></div>
                </li>
                <li>
                    <div class="navbar-text" style="font-size:14pt;margin-left:0px;">Item(s)</div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @include('flash::message')
        @php $j=0 @endphp
        @foreach($drinks as $drink)
            @if ($j==0) <div class='row'> @endif
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{ $drink->name }} {{ $drink->description }}</div>
                        <div class="panel-body"><img style="width:80%;height:200px;" class="img-responsive center-block" src="{{ asset('/img/' . $drink->image)}}"/></div>
                        <div class="panel-footer"><button id="addItem" type="button" class="btn btn-default center-block addItem" value="{{$drink->id}}">Add To Cart</button></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
    $(".addItem").click(function() {
        var total = parseInt($('#shoppingcart').text());
        var itemId = $(this).val();
        $('#shoppingcart').text(total);
        $.ajax({
            type: "get",
            url: "{{url('drinks/additem/')}}" + "/" + itemId,
            success: function(response) {
                total = total + 1;
                $('#shoppingcart').text(response.total);
            },
            error: function() {
                alert("Problem communicating with the server.");
            }
        });
    });
    </script>
@endsection