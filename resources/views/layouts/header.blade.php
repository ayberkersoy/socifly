<!-- Header Section Start -->
<header class="header--section style--1">
    <!-- Header Topbar Start -->
    <div class="header--topbar bg-black">
        <div class="container">

            <!-- Header Topbar Social Start -->
            <ul class="header--topbar-social nav float--left hidden-xs">
                <li><a href="{{ $settings->facebook }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ $settings->twitter }}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ $settings->instagram }}"><i class="fa fa-instagram"></i></a></li>
                <li><a href="{{ $settings->youtube }}"><i class="fa fa-youtube"></i></a></li>
            </ul>
            <!-- Header Topbar Social End -->

            <!-- Header Topbar Links Start -->
            <ul class="header--topbar-links nav ff--primary float--right">
                @if(Auth::check())
                    <li>
                        <a href="/profile" class="btn-link">
                            <i class="fa mr--8 fa-user-o"></i>
                            <span>Hesabım</span>
                        </a>
                    </li>
                @else
                    <li class="pt--10">
                        <button class="btn btn-success" onclick="location.href='/login';">Giriş Yap</button>
                    </li>
                    <li class="pt--10">
                        <button class="btn btn-info" onclick="location.href='/register';">Kayıt Ol</button>
                    </li>
                @endif
            </ul>
            <!-- Header Topbar Links End -->
        </div>
    </div>
    <!-- Header Topbar End -->

    <!-- Header Navbar Start -->
    <div class="header--navbar navbar bg-black" data-trigger="sticky">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle style--1 collapsed" data-toggle="collapse" data-target="#headerNav">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Header Navbar Logo Start -->
                <div class="header--navbar-logo navbar-brand">
                    <a href="/">
                        <img src="{{ asset($settings->logo) }}" class="normal" alt="">
                    </a>
                </div>
                <!-- Header Navbar Logo End -->
            </div>

            <div id="headerNav" class="navbar-collapse collapse float--right">
                <!-- Header Nav Links Start -->
                <ul class="header--nav-links style--1 nav ff--primary">
                    <li>
                        <a href="/">
                            <span>Anasayfa</span>
                        </a>
                    </li>
                    <li>
                        <a href="/events">
                            <span>Etkinlikler</span>
                        </a>
                    </li>
                    <li>
                        <a href="/groups">
                            <span>Gruplar</span>
                        </a>
                    </li>
                    <li>
                        <a href="/forum">
                            <span>Forum</span>
                        </a>
                    </li>
                    <li>
                        <a href="/users">
                            <span>Üyeler</span>
                        </a>
                    </li>
                    <li>
                        <a href="/contact">
                            <span>İletişim</span>
                        </a>
                    </li>
                </ul>
                <!-- Header Nav Links End -->
            </div>
        </div>
    </div>
    <!-- Header Navbar End -->
</header>
<!-- Header Section End -->