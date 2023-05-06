<ul class="nav navbar-nav pull-right"> 
	@if(Auth::guest())
		<li>
			<a href="{{route('register')}}">Register</a></li> 
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</li>
		<li>
			<a href="{{route('login')}}">Login</a></li> 
			<span class="glyphicon glyphicon-log-in"></span>
		</li>
	@else
		<li>
			<form action="{{ route('logout') }}" method="POST">
			@csrf
				<button type="submit">Logout</button>
			</form>
		</li>
	@endif
</ul>