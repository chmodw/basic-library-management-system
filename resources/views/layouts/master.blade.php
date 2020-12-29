<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-blue-100">
        @include('layouts.nav')
    <div class="mx-auto">
        @yield("content")
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

 