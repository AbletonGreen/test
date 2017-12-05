@extends('dashboard.layouts.app') @section('content')


    <div class="col-sm-10 col-md-10 col-md-offset-2 main">
       <div class="header"><h1>Profile</h1></div>
           <div class="new-artist">
               <a href="/dashboard/profiles/create" class="btn btn-success" role="button">Add New</a>
           </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-md-1">
                        id
                    </th>
                    <th class="col-md-1">
                        Name
                    </th>
                    <th class="col-md-1">
                        Lastname
                    </th>
                    <th class="col-md-1">
                        Email
                    </th>
                    <th class="col-md-1">
                        Region
                    </th>
                    <th class="col-md-1">
                        Phone
                    </th>
                    <th class="col-md-1">
                        Edit
                    </th>
                    <th class="col-md-1">
                        Delete
                    </th>
                    
                </tr>
            </thead>
            <tbody>
                <!-- row -->
              @foreach ($profiles as $profile)
                <tr>
                    <td>
                      {{ $profile->id }}
                    </td>
                    <td>
                      {{ $profile->name }}
                    </td>
                    <td>
                      {{ $profile->lastname }}
                    </td>
                    <td>
                      {{ $profile->email }}
                    </td>
                    <td>
                      {{ $profile->region->name }}
                    </td>
                    <td>
						  @foreach ($profile->phones as $phone)
							<li class="list-group-item">
								<strong>
									{{ $phone->value }}
								</strong>
							</li>
		 				@endforeach
                    </td>
                    <td>
                        Edit
                    </td>
                    <td>
                       Delete
                    </td>
                </tr>  
              @endforeach
            </tbody>
        </table>
    </div>


@endsection