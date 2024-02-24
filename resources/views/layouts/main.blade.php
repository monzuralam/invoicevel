<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.topbar')

    @include('partials.sidebar')

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>@yield('pageTitle', '')</h1>
        </div>
        @yield('content')
    </main><!-- End #main -->

    @include('partials.footer')

    @include('partials.scripts')
</body>

</html>
