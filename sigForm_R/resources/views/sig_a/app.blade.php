<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Contenu spécifique de la page --}}
    <main>
        @yield('content')
    </main>

  {{--Footer--}}
  @include('partials.footer')
</body>
</html>
