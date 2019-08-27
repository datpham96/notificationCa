<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>

<body>
    <div id="app">
        <example-component />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script>
        let userId = 1;
        window.Echo.private('App.User.' + 1)
            .notification((notification) => {
                console.log(notification.type);
            });
    </script> --}}
</body>

</html>