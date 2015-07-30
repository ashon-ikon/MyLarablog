<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <title>Yinka's Blog Roll - @yield('title') </title>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />-->
        <link rel="stylesheet" href="/css/bootstrap.min.css" />
        @section('scripts')
        <script type="app"></script>
        @show
    </head>
    <body>
        <div class="container">
            <h1>@yield('title')</h1>
            @yield('content')
        </div>
        <div class="footer">@yield('footer')</div>
    </body>
</html>