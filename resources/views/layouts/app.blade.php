<!DOCTYPE html>
<html>
<head>
    <base href="/"/>
    <title>Posty</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <style type="text/css">
        .table td, .table th {
            padding: .75rem;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body class="">
<nav class="p-6">
    <ul class="flex items-center">
        <li>
            <a href="/" class="p-3">Home</a>
        </li>
        <li>
            <a href="{{route('events.index')}}" class="p-3">Events</a>
        </li>
    </ul>
</nav>
@yield('content')
</body>
</html>
