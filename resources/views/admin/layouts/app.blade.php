<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Lunoz - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/favicon.ico') }}">

    <link href="{{ asset('assets/backend/libs/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/backend/css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('assets/backend/js/config.js') }}"></script>

    @stack('head')

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        @include('admin.layouts._sidebar')



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            @include('admin.layouts._topbar')
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    {{ $slot }}

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                               {{ now()->format('Y') }} © Lunoz
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://github.com/techwizi01"
                                        target="_blank">techwizi</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="{{ asset('assets/backend/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>

    <script src="{{ asset('assets/backend/libs/morris.js/morris.min.js') }}"></script>

    <script src="{{ asset('assets/backend/libs/raphael/raphael.min.js') }}"></script>

    @stack('script')


</body>

</html>
