<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>
    @if (session()->has('success') || session()->has('error'))
        <div class="toast toast-end" id="toast">
            @if (session('success'))
                <div class="alert alert-success">
                    <span>{{ session('success') }}</span>
                </div>
            @else
                <div class="alert alert-error">
                    <span>{{ session('error') }}</span>
                </div>
            @endif
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('toast').style.display = 'none';
            }, 2000);
        </script>
    @endif

    @include('components.navbar')

    @yield('content')

    @include('components.footer')
</body>

</html>
