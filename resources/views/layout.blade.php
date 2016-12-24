<!DOCTYPE html>
<html>
<head>
    <title>เรียนไรดอทคอม</title>
    <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/layout.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/libs/montserratfont/css/montserrat-webfont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/pslfont/stylesheet.css') }}" rel="stylesheet">
    
    @yield('css')    
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="social-nav">
            <div class="container">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>                                
                </ul>
            </div>
        </div>
        <div class="apps-nav">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('') }}">
                        <img src="{{ asset('assets/img/branding.png') }}">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="font-family: 'psl_displayregular'">
                        <li><a href="{{ URL::to('') }}" class="active" style="font-size: 23px;">หน้าแรก</a></li>
                        <li><a href="{{ URL::to('find-interests') }}" style="font-size: 23px;">คณะ/มหาวิทยาลัย</a></li>
                        <li><a href="{{ URL::to('blog-suggestion/1') }}" style="font-size: 23px;">U STORY</a></li>
                        <li><a href="{{ URL::to('event') }}" style="font-size: 23px;">EVENT</a></li>
                        <li><a href="{{ URL::to('do-test') }}" style="font-size: 23px;">แบบทดสอบ</a></li>
                        <li><a href="#" class="pill-button login-btn" style="font-size: 23px;">Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </div>
    </nav>
    @yield('content')

    <script src="{{ asset('assets/libs/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    
    @yield('script')
</body>
</html>
