<ul class="nav navbar-nav pull-right"> 
	@if(Auth::guest())
		<li>
			<a href="{{route('register')}}">
				Register
				<span class="glyphicon glyphicon-pencil"></span>
			</a>
		</li>
		<li>
			<a href="{{route('login')}}">
				Login
				<span class="glyphicon glyphicon-log-in"></span>
			</a>
		</li>
	@else
		<li>
			<form action="{{ route('logout') }}" method="POST">
			@csrf
				<button type="submit" class="btn btn-primary" style="padding: 15px;">
					<span class="glyphicon glyphicon-log-out"></span> Log out
				</button>
			</form>
		</li>
	@endif
</ul>

