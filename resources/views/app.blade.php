<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/all.css">
</head>
<body>
    @include('navbar')
    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>

    <script src="/js/all.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    @yield('footer')
</body>
</html> 