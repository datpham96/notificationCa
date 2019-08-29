
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Nofification CA</title>
    <link href="{{ asset('/css/style.css') }}" media="all" rel="stylesheet" type="text/css" />
    
</head>

<body>
    <table class="body-wrap">
        <tr>
            <td></td>
            <td class="container" width="600">
                <div class="content">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-wrap">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <!-- header -->
                                    @include('Email.layout.header')
                                    <!-- end header -->

                                    <!-- content -->
                                    @yield('content')
                                    <!-- end content -->
                                    
                                </table>
                            </td>
                        </tr>
                    </table>
                    <!-- footer -->
                    @include('Email.layout.footer')
                    <!-- end footer -->
                </div>
            </td>
            <td></td>
        </tr>
    </table>

</body>
</html>