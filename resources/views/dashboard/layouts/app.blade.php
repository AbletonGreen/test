<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    
    @include('dashboard.layouts.partials.style')
    
</head>
<body>
    
     @include('dashboard.layouts.partials.navbar')
     
    <div class="container-fluid">
      <div class="row">
       
        @include('dashboard.layouts.partials.sidebar')
        
         @yield('content')
         
      </div>
    </div>
    
    @include('dashboard.layouts.partials.scripts')
    
</body>
</html>
