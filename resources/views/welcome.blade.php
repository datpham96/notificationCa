<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script>
        var siteUrl = '{!! url("/") !!}';
        var urlAuthorization = "http://auth.newtel.com.vn/authorization";
    </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>
            <!-- <button onclick="notifyMe()">Notify me!</button> -->

            <div class="links">
                <a class="btn btn-success" onclick="notifyMeProfileAdditional()" href="javascript:void(0)">notifyMeProfileAdditional</a>
                <a class="btn btn-info" onclick="notifyMeExpireService()" href="javascript:void(0)">notifyMeExpireService</a>
                <a class="btn btn-warning" onclick="notifyMeProfileApprovedk()" href="javascript:void(0)">notifyMeProfileApprovedk</a>
                <a class="btn btn-danger" onclick="notifyMeRequestDeny()" href="javascript:void(0)">notifyMeRequestDeny</a>
                <a class="btn btn-light" onclick="notifyMeRaProfileRequest()" href="javascript:void(0)">notifyMeRaProfileRequest</a>
                <a class="btn btn-dark" onclick="notifyMeCaProfileRequest()" href="javascript:void(0)">notifyMeCaProfileRequest</a>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        if (!Notification) {
            alert('Desktop notifications not available in your browser. Try Chromium.');
            return;
        }

        if (Notification.permission !== 'granted')
            Notification.requestPermission();
    });


    function notifyMeProfileAdditional() {
        if (Notification.permission !== 'granted')
            Notification.requestPermission();
        else {
            var notification = new Notification('Dịch vụ MobiCA', {
                icon: siteUrl + '/image/mobica.png',
                body: 'Giao dich (ID) Khach hang: (Ten) da duoc phe duyet',
            });
            notification.onclick = function() {
                window.open('http://stackoverflow.com/a/13328397/1269037');
            };
        }
    }

    function notifyMeExpireService() {
        if (Notification.permission !== 'granted')
            Notification.requestPermission();
        else {
            var notification = new Notification('Dịch vụ MobiCA', {
                icon: siteUrl + '/image/mobica.png',
                body: 'Khach hang (Ten) (CCCD/CMND/PP/MST) (SDT) het han dich vu vao ngay xx/yy/zzzz',
            });
            notification.onclick = function() {
                window.open('http://stackoverflow.com/a/13328397/1269037');
            };
        }
    }

    function notifyMeProfileApprovedk() {
        var data = "<h1> aaaaaaa </h1>";
        if (Notification.permission !== 'granted')
            Notification.requestPermission();
        else {
            var notification = new Notification('Dịch vụ MobiCA', {
                icon: siteUrl + '/image/mobica.png',
                body: 'Giao dich (ID) Khach hang: (Ten) da duoc phe duyet',
            });
            notification.onclick = function() {
                window.open('http://stackoverflow.com/a/13328397/1269037');
            };
        }
    }

    function notifyMeRequestDeny() {
        if (Notification.permission !== 'granted')
            Notification.requestPermission();
        else {
            var notification = new Notification('MobiCA Dịch vụ', {
                icon: siteUrl + '/image/mobica.png',
                body: 'Giao dich (ID) Khach hang: (Ten) da bi tu choi',
            });
            notification.onclick = function() {
                window.open('http://stackoverflow.com/a/13328397/1269037');
            };
        }
    }

    function notifyMeRaProfileRequest() {
        if (Notification.permission !== 'granted')
            Notification.requestPermission();
        else {
            var notification = new Notification('Dịch vụ MobiCA', {
                icon: siteUrl + '/image/mobica.png',
                body: 'Ban co giao dich moi can xet duyet',
            });
            notification.onclick = function() {
                window.open('http://stackoverflow.com/a/13328397/1269037');
            };
        }
    }

    function notifyMeCaProfileRequest() {
        if (Notification.permission !== 'granted')
            Notification.requestPermission();
        else {
            var notification = new Notification('Dịch vụ MobiCA', {
                icon: siteUrl + '/image/mobica.png',
                body: 'Ban co giao dich moi can xet duyet',
            });
            notification.onclick = function() {
                window.open('http://stackoverflow.com/a/13328397/1269037');
            };
        }
    }
</script>