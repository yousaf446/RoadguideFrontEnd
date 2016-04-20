<!DOCTYPE html>
<html>


<!-- Mirrored from preview.byaviators.com/template/superlist/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 19 Apr 2016 05:45:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    @include('admin.default.style')

    <title>Roadguide - Admin</title>
</head>


<body>

<div class="page-wrapper">
        @include('admin.default.header')
    <div class="main">
        <div class="outer-admin">
            <div class="wrapper-admin">
                @include('admin.default.sidebar')
                <div class="content-admin">
                    <div class="content-admin-wrapper">
                        @yield('content')
                        @include('admin.default.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>
        @include('admin.default.script')
</div>
</body>
</html>