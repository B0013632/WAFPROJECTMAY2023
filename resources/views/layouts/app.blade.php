<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>TUD BAR</title> 
		<link rel="icon" href="https://vle-bn.tudublin.ie/pluginfile.php/1/theme_adaptable/favicon/1683025199/faviconTU.ico">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>

    </head> 
<body>
  <nav class="navbar navbar-default navbar-static-top">
    <ul class="nav navbar-nav">
	  <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('employees.index') }}">Employees</a></li>
      <li><a href="{{ route('customers.index') }}">Customers</a></li>
      <li><a href="{{ route('orders.index') }}">Orders</a></li>
      <li><a href="{{ route('reservations.index') }}">Reservations</a></li>
      <li><a href="{{ route('tables.index') }}">Tables</a></li>
	  <li><a href="{{ route('calendar.display') }}">Reservations Calendar</a></li>
    </ul>
	@include('layouts.navAuth')
  </nav>
        <div id="page-content-wrapper"> 
            <div class="container-fluid"> 
                <div class="row"> 
                    <div class="col-lg-2"></div> 
                    <div class="col-lg-8"> @yield('content') </div> 
                    <div class="col-lg-2"></div> 
                </div> 
            </div> 
         </div> 
    </body> 
</html>