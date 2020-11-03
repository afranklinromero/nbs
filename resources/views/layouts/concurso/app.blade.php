<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.concurso.head')
<body>
    <div id="app">
        @include('layouts.concurso.nav')
        <main class="py-4">
            @yield('contenido')
        </main>
    </div>

    @include('layouts.concurso.script')
    @yield('scriptlocal')

</body>

</html>
