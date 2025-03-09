<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light"
    data-sidebar="dark" data-sidebar-size="lg">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('ef34e040856c80f99af3', {
            cluster: 'ap1',
            encrypted: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function (data) {
            alert(JSON.stringify(data));
        });
    </script>
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
</body>

</html>
