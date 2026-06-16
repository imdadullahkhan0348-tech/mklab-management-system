<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('admin/inc/link')
  
</head>
<body class="bg-light">
    <div class="container-fluid">
        @include('admin/inc/navbar')
        <div class="row">
            <div class="col-sm-12 ">
                @yield('index')
            </div>
        </div>
        @include('admin/inc/footer')
           
    </div>
</body>
</html>