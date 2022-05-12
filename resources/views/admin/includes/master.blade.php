<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title') | LifeCaptureMedia</title>

    <link rel="icon" href="{{URL::to('/public/admin')}}/img/favicon.png" type="image/png">
    @include('admin.includes.style')
    @yield('addStyle')
</head>
<body class="crm_body_bg">
    


<!-- main content part here -->
 
 <!-- sidebar  -->
    @include('admin.includes.sidebar')
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
        @include('admin.includes.header')
    <!--/ menu  -->
    <div class="main_content_iner ">
        @yield('content')
    </div>

    <!-- footer part -->
        @include('admin.includes.footer')
</section>
<!-- main content part end -->

    @include('admin.includes.script')
    @yield('addScript')
</body>
</html>
