<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8">
<![endif]-->
<!--[if IE 9]>
<html class="ie9 gt-ie8">
<![endif]-->
<!--[if gt IE 9]><!-->
<html class="gt-ie8 gt-ie9 not-ie">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        <title>@yield('title') - {{ app_name() }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
        {!! HTML::style('assets/'.config('mycp.layoutAssetsFolder').'/css/bootstrap.min.css') !!}
        {!! HTML::style('assets/'.config('mycp.layoutAssetsFolder').'/css/pixel-admin.min.css') !!}
        {!! HTML::style('assets/'.config('mycp.layoutAssetsFolder').'/css/pages.min.css') !!}
        {!! HTML::style('assets/'.config('mycp.layoutAssetsFolder').'/css/rtl.min.css') !!}
        {!! HTML::style('assets/'.config('mycp.layoutAssetsFolder').'/css/themes.min.css') !!}
	{!! HTML::style('assets/'.config('mycp.layoutAssetsFolder').'/css/helper.css') !!}
        <!--[if lt IE 9]>
        {!! HTML::script('assets/'.config('mycp.layoutAssetsFolder').'/js/ie.min.js') !!}
        <![endif]-->
    </head>
    <body class="{{ theme_attr(false) }} {{$class}}">
        <div id="page-signin-bg">
            <div class="overlay"></div>
            {!! HTML::image('assets/'.config('mycp.layoutAssetsFolder').'/img/backgrounds/signin-bg-'.$random.'.jpg') !!}
        </div>

        @yield('content')

        @section('script')

        <!--[if !IE]> -->
        {!! HTML::script('assets/'.config('mycp.layoutAssetsFolder').'/js/jquery.2.0.3.min.js') !!}
        <!-- <![endif]-->
        <!--[if lte IE 9]>
        {!! HTML::script('assets/'.config('mycp.layoutAssetsFolder').'/js/jquery.1.8.3.min.js') !!}
        <![endif]-->

        {!! HTML::script('assets/'.config('mycp.layoutAssetsFolder').'/js/bootstrap.min.js') !!}
        {!! HTML::script('assets/'.config('mycp.layoutAssetsFolder').'/js/pixel-admin.min.js') !!}

        <script type="text/javascript">
            var init = [];
            init.push(function () {
                var $ph = $('#page-signin-bg'), $img = $ph.find('> img');
                $(window).on('resize', function () {
                    $img.attr('style', '');
                    if ($img.height() < $ph.height()) {
                        $img.css({
                            height: '100%',
                            width: 'auto'
                        });
                    }
                });
            });
            window.PixelAdmin.start(init);
        </script>
        @show
    </body>
</html>