<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@stack('title')</title>
</head>
<x-navbar></x-navbar>
<body>

{{$slot}}

<x-footer></x-footer>
</body>
</html>