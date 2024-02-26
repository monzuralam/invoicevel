<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @if (!request()->is('login'))
        @include('partials.topbar')

        @include('partials.sidebar')
    @endif


    <main @if (!request()->is('login')) id="main" class="main" @endif>

        @if (isset($pageTitle))
            <div class="pagetitle">
                <h1>@yield('pageTitle', '')</h1>
            </div>
        @endif

        @yield('content')
    </main><!-- End #main -->

    @if (!request()->is('login'))
        @include('partials.footer')
    @endif

    @include('partials.scripts')
</body>

</html>
