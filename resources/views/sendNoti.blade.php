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
    <button onclick="notifyMe()">Notify me!</button>
    <div id="app">
        <example-component />
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function notifyMe() {
            // Let's check if the browser supports notifications
            if (!("Notification" in window)) {
                alert("This browser does not support desktop notification");
            }

            // Let's check if the user is okay to get some notification
            else if (Notification.permission === "granted") {
                // If it's okay let's create a notification
                var notification = new Notification("Hi there!");
                notification.onclick = function(event){
                            event.preventDefault();
                            window.open('https://facebook.com', '_blank');
                        }
            }

            // Otherwise, we need to ask the user for permission
            // Note, Chrome does not implement the permission static property
            // So we have to check for NOT 'denied' instead of 'default'
            else if (Notification.permission !== 'denied') {
                Notification.requestPermission(function (permission) {

                    // Whatever the user answers, we make sure we store the information
                    if (!('permission' in Notification)) {
                        Notification.permission = permission;
                    }

                    // If the user is okay, let's create a notification
                    if (permission === "granted") {
                        var notification = new Notification("Hi there!");
                        notification.onclick = function(event){
                            event.preventDefault();
                            window.open('https://facebook.com', '_blank');
                        }
                    }
                });
            } else {
                alert(`Permission is ${Notification.permission}`);
            }

            // At last, if the user already denied any notification, and you 
            // want to be respectful there is no need to bother him any more.
        }
    </script>
    {{-- <script>
        let userId = 1;
        window.Echo.private('App.User.' + 1)
            .notification((notification) => {
                console.log(notification.type);
            });
    </script> --}}
</body>

</html>