@extends('dashboard.layouts.app') 
@section('content')

<div class="col-sm-10 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Create</h1>
    
            <div class="row form-wrapper">
            <div class="col-md-9 with-sidebar">
                <form class="form-horizontal" role="form" method="POST" action="/dashboard/regions">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name" placeholder="Region Name" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-success">Add New</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection