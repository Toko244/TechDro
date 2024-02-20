<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
@include('admin.layouts.head')

    <body>
        
        <!-- Begin page -->
        <div id="wrapper">

            @include('admin.layouts.header')

            @include('admin.layouts.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')      
                        
                    </div> 
                    <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        @include('admin.layouts.scripts')

        <script>
            window.translations = {!! Cache::get('translations') !!};
            var currentLocale = "{!! app()->getlocale() !!}";
        </script>
    </body>
</html>