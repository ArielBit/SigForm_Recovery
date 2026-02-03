<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>

    {{-- Header --}}
    @include('sig_a.header')

    {{-- Contenu spécifique de la page --}}
    <main>
        @yield('content')
    </main>

  {{--Footer--}}
  @include('sig_a.footer')
</body>
</html>
