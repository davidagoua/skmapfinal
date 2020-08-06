<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="header-content h-100 d-flex align-items-center justify-content-between">
                        <div class="academy-logo">
                            <a href="index.html"><img src="{{ asset('img/mobile-logo.png') }}" height="100" alt=""></a>
                        </div>
                        <div class="login-content">
                            <a href="{{ route('login') }}">Connexion</a> / <a href="#">Inscription</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="academy-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="academyNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('home.index')}}">Acceuil</a></li>
                                <li><a href="#">Orientation</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('debouche.index') }}">Débouchés</a></li>
                                        <li><a href="{{ route('filiere.index') }}">Filières</a></li>
                                        <li><a href="{{ route('ecole.index') }}">Ecoles</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Categories</a>
                                    <div class="megamenu">
                                        @foreach($categories->split(3) as $cats)
                                        <ul class="single-mega cn-col-4">
                                            @foreach($cats as $cat)
                                            <li><a href="{{ route('home.search',['id'=>$cat]) }}">{{$cat->nom}}</a></li>
                                            @endforeach
                                        </ul>
                                        @endforeach
                                        <div class="single-mega cn-col-4">
                                            <img src="img/bg-img/bg-1.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('blog.index') }}">Actualités</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Calling Info -->
                    <div class="calling-info">
                        <div class="call-center">
                            <a href="tel:+654563325568889"><i class="icon-telephone-2"></i> <span>{{env('CONTACT_SKMAP')}}</span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

