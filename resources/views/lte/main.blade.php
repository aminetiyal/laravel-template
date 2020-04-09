<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Advanced form elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-lte-styles></x-lte-styles>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <x-lte-navbar></x-lte-navbar>

    <x-lte-sidebar></x-lte-sidebar>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('pageTitle', 'Page')</h1>
                    </div>
                    <div class="col-sm-6">
                        <x-lte-breadcrumb></x-lte-breadcrumb>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
        <!-- /.content -->
    </div>

    <x-lte-footer></x-lte-footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<x-lte-scripts></x-lte-scripts>
</body>
</html>
