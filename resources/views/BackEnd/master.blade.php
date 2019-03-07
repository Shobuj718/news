<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Arise Admin Dashboard">
        <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap, C3 Graphs, D3 Graphs, NVD3 Graphs, Admin Skin, Black Admin Dashboard, Grey Admin Dashboard, Dark Admin Dashboard, Simple Admin Dashboard, Simple Admin Theme, Simple Bootstrap Dashboard, Invoice, Tasks, Profile">
        <meta name="author" content="Ramji">
        <link rel="shortcut icon" href="{{asset('public/BackEnd')}}/img/fav.png">
        <title>Dashboard - Ehsan Dashboard</title>
        <link href="{{asset('public/BackEnd')}}/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="{{asset('public/BackEnd')}}/css/main.css" rel="stylesheet" media="screen">
        <link href="{{asset('public/BackEnd')}}/fonts/icomoon/icomoon.css" rel="stylesheet">
        <link href="{{asset('public/BackEnd')}}/css/c3/c3.css" rel="stylesheet">
        <link href="{{asset('public/BackEnd')}}/css/nvd3/nv.d3.css" rel="stylesheet">
        <link href="{{asset('public/BackEnd')}}/css/horizontal-bar/chart.css" rel="stylesheet">
        <link href="{{asset('public/BackEnd')}}/css/heatmap/cal-heatmap.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/BackEnd')}}/css/circliful/circliful.css">
        <link rel="stylesheet" href="{{asset('public/BackEnd')}}/css/odometer.css">
        @yield('stylesheet')
    </head>
    <body>
        
        <!-- header start here -->
        @include('BackEnd.inc.header')
        <!-- header end here -->

        <!-- side nav start here -->
        @include('BackEnd.inc.sidenav')
        <!-- side nav end here -->

        
        <div class="dashboard-wrapper dashboard-wrapper-lg">
            <div class="container-fluid">
                <div class="top-bar clearfix">
                    <div class="row gutter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="page-title">
                                <h3>@yield('heading_title')</h3>
                                <p>Welcome to Ehsan News Admin Dashboard</p>
                            </div>
                        </div>
                       <!--  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="right-stats" id="mini-nav-right">
                                <li><a href="javascript:void(0)" class="btn btn-danger"><span>76</span>Sales</a></li>
                                <li><a href="tasks.html" class="btn btn-info"><span>18</span>Tasks</a></li>
                                <li><a href="javascript:void(0)" class="btn btn-success"><i class="icon-download6"></i> Export</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                

                @yield('main_content')
            </div>
        </div>
        <footer>Copyright Ehsan News <span>{{date('Y')}}</span></footer>

        <script src="{{asset('public/BackEnd')}}/js/jquery.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/sparkline/retina.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/sparkline/custom-sparkline.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/scrollup/jquery.scrollUp.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/d3/d3.v3.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/d3/d3.powergauge.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/d3/gauge.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/d3/gauge-custom.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/c3/c3.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/c3/c3.custom.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/nvd3/nv.d3.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/nvd3/nv.d3.custom.boxPlotChart.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/nvd3/nv.d3.custom.stackedAreaChart.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/horizontal-bar/horizBarChart.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/horizontal-bar/horizBarCustom.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/gaugemeter/gaugeMeter-2.0.0.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/gaugemeter/gaugemeter.custom.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/heatmap/cal-heatmap.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/heatmap/cal-heatmap.custom.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/odometer/odometer.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/odometer/custom-odometer.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/peity/peity.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/peity/custom-peity.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/circliful/circliful.min.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/circliful/circliful.custom.js"></script>
        <script src="{{asset('public/BackEnd')}}/js/custom.js"></script>

        @yield('scripts')
    </body>
</html>
