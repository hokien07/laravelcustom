<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{'css/style.css'}}">
    <title>Ho Kien 07</title>
</head>
<body>
    <div id="container">
        @include('layouts.header')
        <h1>Ho Kien 07</h1>
        <!--nhung file vao content-->
        @yield('content')

        @include('layouts.footer')
    </div>

</body>
</html>
