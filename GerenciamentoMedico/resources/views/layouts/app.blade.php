<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portal Vagas</title>
    {{-- Links: CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- Header --}}
    @include('components.header')

    {{-- Content --}}
    <div class="container">
        @yield('content')
    </div>
    
    {{-- Footer --}}
    @include('components.footer')
</body>
    {{-- Scripts: JS --}}

</html>
