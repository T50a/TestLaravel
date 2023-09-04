@props(['title', 'h1' => null])

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.scss'])
</head>

<body>
    @if(session('notification'))
        <div class="alert alert-success">
            {{ session('notification') }}
        </div>
    @endif

    {{ $slot }}
@vite(['resources/js/app.js'])
</body>

</html>
