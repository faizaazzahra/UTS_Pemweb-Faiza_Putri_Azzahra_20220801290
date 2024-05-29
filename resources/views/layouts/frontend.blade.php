<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>@yield('title', 'Home')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @yield('meta')

    @include('layaouts.inc.links')
    @include('layaiuts.inc.nav')
</head>
<body>
    <main id="main">
        <!-- <br> -->
        <section class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url ('/') }}">Home</a></li>
                    <li><a href="{{ URL::current() }}">@yield('title')</a></li>
                </ol>
            </div>
        </section>
        @yield('content')
    </main>
</body>

@include('layouts.inc.script')

<a href="#" class="back-to-top d-flex align-item-center justify-content-center"><i class="bibi-arrow-up-short"></i></a>

@include('layaouts.inc.footer')
</html>