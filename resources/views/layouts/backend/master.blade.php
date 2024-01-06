<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link href="/asset/backend/css/style.min.css" rel="stylesheet" />
    <link href="/asset/backend/css/styles.css" rel="stylesheet" />
    <link href="/asset/backend/plugin/dataTables/datatables.min.css" rel="stylesheet">



</head>

<body class="sb-nav-fixed">
    @include('layouts.backend.section.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('layouts.backend.section.sidebar')
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('content')
            </main>
            @include('layouts.backend.section.footer')
        </div>
    </div>
    <script src="/asset/backend/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/asset/backend/js/scripts.js"></script>
    <script src="/asset/backend/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/asset/backend/assets/demo/chart-area-demo.js"></script>
    <script src="/asset/backend/assets/demo/chart-bar-demo.js"></script>
    <script src="/asset/backend/assets/demo/simple-datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="/asset/backend/plugin/dataTables/datatables.min.js"></script>
</body>

</html>
