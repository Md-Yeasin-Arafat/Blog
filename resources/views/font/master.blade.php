<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>BlackPod</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('/font/') }}/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/font/') }}/css/coin-slider.css" />
    <script type="text/javascript" src="{{ asset('/font/') }}/js/cufon-yui.js"></script>
    <script type="text/javascript" src="{{ asset('/font/') }}/js/cufon-aller.js"></script>
    <script type="text/javascript" src="{{ asset('/font/') }}/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="{{ asset('/font/') }}/js/script.js"></script>
    <script type="text/javascript" src="{{ asset('/font/') }}/js/coin-slider.min.js"></script>
</head>

<body>
    <div class="main">
        <div class="header">

            @include('font.includes.header')
        </div>
        <div class="content">
            <div class="content_resize">

                <div class="mainbar">
                    @yield('homeContent');
                    @yield('supportContent')
                </div>

                @include('font.includes.sidebar')
                <div class="clr"></div>
            </div>
        </div>
        
        @include('font.includes.footer')
    </div>
    <div align=center>This template downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div>
</body>

</html>