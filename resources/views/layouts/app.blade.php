<!DOCTYPE html>
    <head> 
        <meta charset="UTF-8"> 
        <title>TUD BAR</title> 
		<link rel="icon" href="https://vle-bn.tudublin.ie/pluginfile.php/1/theme_adaptable/favicon/1683025199/faviconTU.ico">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'> 
        <!-- Bootstrap 3.3.7 --> 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head> 
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('home') }}">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('employees.index') }}">Employees</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('customers.index') }}">Customers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('orders.index') }}">Orders</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('reservations.index') }}">Reservations</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('tables.index') }}">Tables</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('calendar.display') }}">Reservations Calendar</a>
			</li>
			<li class="nav-item">
				<a class="nav-link"] href="{{ route('drinks.displaygrid') }}">Drinks Menu</a>
			</li>

		</ul>
			@include('layouts.navAuth')
	</div>
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








 