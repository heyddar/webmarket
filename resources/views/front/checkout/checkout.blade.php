<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    {!! SEO::generate() !!}

    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">
    <link rel="stylesheet" href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}">
{!! htmlScriptTagJsApi(/* $formId - INVISIBLE version only */) !!}

<!--  Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

    <!-- Twitter Bootstrap -->
    <link href="{{asset('front/stylesheets/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('front/stylesheets/responsive.css')}}" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="{{asset('front/js/rs-plugin/css/settings.css')}}" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{asset('front/js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css')}}" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="{{asset('front/js/prettyphoto/css/prettyPhoto.css')}}" type="text/css"/>
    <!-- main styles -->

    <link href="{{asset('front/stylesheets/main.css')}}" rel="stylesheet">



    <!-- Modernizr -->
    <script src="{{asset('front/js/modernizr.custom.56918.js')}}"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('front/images/apple-touch/144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('front/images/apple-touch/114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('front/images/apple-touch/72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('front/images/apple-touch/57.png')}}">
    <link rel="shortcut icon" href="{{asset('front/images/apple-touch/57.png')}}">
</head>
<body class=" checkout-page">
@yield('checkout')
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--  = jQuery - CDN with local fallback =  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="{{asset('front/js/jquery.min.js')}}"><\/script>');
    }
</script>

<!--  = _ =  -->
<script src="{{asset('front/js/underscore/underscore-min.js')}}" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="{{asset('front/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="{{asset('front/js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="{{asset('front/js/jquery.carouFredSel-6.2.1-packed.js')}}" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="{{asset('front/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('front/js/jquery-ui-1.10.3/touch-fix.min.js')}}" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="{{asset('front/js/isotope/jquery.isotope.min.js')}}" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="{{asset('front/js/bootstrap-tour/build/js/bootstrap-tour.min.js')}}" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="{{asset('front/js/prettyphoto/js/jquery.prettyPhoto.js')}}" type="text/javascript"></script>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{asset('front/js/goMap/js/jquery.gomap-1.3.2.min.js')}}"></script>

<!--  = Custom JS =  -->
<script src="{{asset('front/js/custom.js')}}" type="text/javascript"></script>
</body>
</html>


