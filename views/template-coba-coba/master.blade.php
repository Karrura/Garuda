  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no" />
  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#49CEFF">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#49CEFF" />
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <title>@yield('title', 'Master')</title>
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/animate.css/animate.min.css">
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/metisMenu/dist/metisMenu.min.css">
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/Waves/dist/waves.min.css">
  <link rel="stylesheet" href="{{asset('assets/bower_components')}}/toastr/toastr.css">
  <link rel="stylesheet" href="{{asset('assets/css')}}/style.css">
</head>

<body>
  @include('template.script')
  <aside class="sidebar">
    @include('template.sidebar')
  </aside>

  <!--Preloader-->
    {{--<div id="preloader">
      <div class="refresh-preloader">
        <div class="preloader">
          <i>.</i><i>.</i><i>.</i>
        </div>
      </div>
    </div>--}}

  <div class="wrapper">

    @include('template.navbar')

    <div class="container-fluid">
      <div class="row">
        <!-- Content goes here-->
        @yield('main')
        <span>This was a Content</span>
        
      </div>
    </div>
    <footer class="page-footer">© 2016 Copyright</footer>
  </div>
</body>
</html>
