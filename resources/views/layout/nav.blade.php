<div class="blog-masthead">
	<div class="container">
		<nav class="nav"> 
			<a class="nav-link active" href="\">Home</a> 
			<a class="nav-link" href="\profile">New features</a>
			<a class="nav-link" href="#">Press</a> 
			<a class="nav-link" href="#">New hires</a>
			@if(Auth::check())
				<a class="nav-link ml-auto" href="#"> Welcome, {{ Auth::user()->name
				}}</a>
			@endif
		</nav>
	</div>
</div>