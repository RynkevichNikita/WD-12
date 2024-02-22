@include('layouts.head')
<body style="display:flex;flex-direction:column;align-items:center;justify-content:space-between;height:800px">
    <header>
        @include('layouts.nav')
    </header>
    <main>
        <div>@yield('main')</div>
    </main>
    <footer style="width:70%">
        @section('footer')
        @show
    </footer>
</body>
</html>