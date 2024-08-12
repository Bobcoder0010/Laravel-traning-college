<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    @include('backend.includs.header')
    @include('backend.includs.nav')
   
    {{--body--}}
    @yield('content')
    {{--/body--}}


    @include('backend.includs.footer')
</body>
</html>