<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mar Badia</title>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">

    <!-- para que vaya bootsrap -->
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/miCss.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png">
</head>
<body class="bg-dark">
    <div id="app">
        <nav class="navbar navbar-expand-sm" style="background-color: #000">
                <ul class="navbar-nav mx-auto text-md-center text-left" >
                    <li class="nav-item my-auto">
                        <a class=" nav-link navbar-brand mx-0 d-none d-md-inline text-white"  href="dades"> HOME </a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link navbar-brand mx-0 d-none d-md-inline text-white" href="projecte"> PROJECTS </a>
                    </li>
                </ul>
        </nav>

        @yield('principal')
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
