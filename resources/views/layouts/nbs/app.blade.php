<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.nbs.head')
@yield('css')
<body>
    <div id="app">
        @include('layouts.nbs.nav')
        <main class="py-4">
            @yield('contenido')
        </main>
    </div>



    @include('layouts.nbs.footer')

    @include('layouts.nbs.script')
    @yield('scriptlocal')

</body>

</html>
