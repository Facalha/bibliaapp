<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BibliaApp</title>
    @livewireStyles
    <script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/service-worker.js')
            .then(() => console.log('Service Worker registered'))
            .catch(error => console.error('Service Worker registration failed:', error));
    }
    </script>

    <link rel="manifest" href="/manifest.json">

</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>

