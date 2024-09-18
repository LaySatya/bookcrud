<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>@yield('name')</title>
</head>
<body>
    {{-- <div class="container-fluid"> --}}
        {{-- @include('partials.header') --}}
    {{-- </div> --}}
    {{-- <div class="container">
        @include('partials.navbar')
    </div> --}}
    <div class="container">
        @yield('contents')
    </div>
</body>

</html>