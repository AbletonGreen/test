@extends('layout.app')

@section('content')
	<div class="col-sm-8 blog-main">
		
         @foreach ($profiles as $profile)
         
         	<div class="profile"> 
				<h4 class="blog-post-title">{{ $profile->name }} {{ $profile->lastname }}</h4>
				<h6>{{ $profile->email }} , {{ $profile->phone }}</h6>
				<h6>{{ $profile->region->name }}</h6>
			</div>
          	<br>
         @endforeach
         
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
@endsection
