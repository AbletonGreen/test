@extends('dashboard.layouts.app') 
@section('content')

<div class="col-sm-10 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Create</h1>
    
            <div class="row form-wrapper">
            <div class="col-md-9 with-sidebar">
                <form class="form-horizontal" role="form" enctype='multipart/form-data' method="POST" action="/dashboard/profiles">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-2 control-label">Name</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-2 control-label">Lastname</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname" value="{{ old('lastname') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-2 control-label">Email</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>
                    
                    <div class="form-group">
						<label class="col-md-2 control-label">Phone</label>
						<div class="col-md-8">
			
							<div class="phone-list">

								<div class="input-group phone-input col-md-12">
									<input type="text" name="phone[1][number]" class="form-control" placeholder="+1 (999) 999 9999" />
								</div>

							</div>


							<button type="button" class="btn btn-success btn-sm btn-add-phone"><span class="glyphicon glyphicon-plus"></span> Add Phone</button>
						</div>

					</div>
                    <div class="form-group">
                        <label for="file" class="col-md-2 control-label">Preview</label>
                        <div class="col-md-8">
                            <input type="file" id="file" name="file">
                    	</div>
					</div>
                    <div class="form-group">
                        <label for="region_id" class="col-md-2 control-label">Region</label>
                        <div class="col-md-8">
                           <select name="region_id" id="region_id" class="form-control">
                            @foreach ($regions as $region) 
           						<option value=" {{ $region->id }} ">{{ $region->name }}</option>
           					@endforeach
                           
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <button type="submit" class="btn btn-success">Add New Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection