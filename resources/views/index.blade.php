@extends('layouts.layout')

@section('css')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js" integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q==" crossorigin=""></script>


    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        #map {
            width: 100%;
            height: 570px;
        }
    </style>

@endsection

@section('content')

<!-- Banner Section Start -->
<section class="banner--section">

    <div id='map'></div>

</section>
<!-- Banner Section End -->

<!-- Features Section Start -->
<section class="section bg-lighter pt--80 pb--40">
    <div class="container">
        <div class="row AdjustRow">
            <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                <!-- Feature Item Start -->
                <div class="feature--item bg-default text-center">
                    <div class="title">
                        <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{ \App\User::count() }}</span></h2>
                    </div>

                    <div class="sub-title">
                        <h3 class="h2 fs--16">Üye</h3>
                    </div>

                    <div class="desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- Feature Item End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                <!-- Feature Item Start -->
                <div class="feature--item bg-default text-center">
                    <div class="title">
                        <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{ \App\Event::count() }}</span></h2>
                    </div>

                    <div class="sub-title">
                        <h3 class="h2 fs--16">Etkinlik</h3>
                    </div>

                    <div class="desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- Feature Item End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                <!-- Feature Item Start -->
                <div class="feature--item bg-default text-center">
                    <div class="title">
                        <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{ \App\Forum::count() }}</span></h2>
                    </div>

                    <div class="sub-title">
                        <h3 class="h2 fs--16">Forum Başlığı</h3>
                    </div>

                    <div class="desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- Feature Item End -->
            </div>

            <div class="col-md-3 col-xs-6 col-xxs-12 pb--40">
                <!-- Feature Item Start -->
                <div class="feature--item bg-default text-center">
                    <div class="title">
                        <h2 class="h1 ff--default text-primary"><span data-trigger="counterup">{{ \App\Group::count() }}</span></h2>
                    </div>

                    <div class="sub-title">
                        <h3 class="h2 fs--16">Grup</h3>
                    </div>

                    <div class="desc">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <!-- Feature Item End -->
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- How It Works Section Start -->
<section class="section pt--70 pb--40">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section--title pb--50 text-center">
            <div class="title">
                <h2 class="h2">Nasıl Çalışır?</h2>
            </div>

            <div class="sub-title">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has industry's.</p>
            </div>
        </div>
        <!-- Section Title End -->

        <div class="row">
            <div class="col-md-7 pb--40">
                <div class="row gutter--15 AdjustRow" data-scroll-reveal="group">
                    <div class="col-xs-4 pb--15">
                        <img src="img/how-it-works-img/01.jpg" alt="">
                    </div>

                    <div class="col-xs-4 pb--15">
                        <img src="img/how-it-works-img/02.jpg" alt="">
                    </div>

                    <div class="col-xs-4 pb--15">
                        <img src="img/how-it-works-img/03.jpg" alt="">
                    </div>

                    <div class="col-xs-12">
                        <img src="img/how-it-works-img/04.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-md-5 pb--40">
                <!-- Info Items Start -->
                <div class="info--items" data-scroll-reveal="group">
                    <!-- Info Item Start -->
                    <div class="info--item clearfix">
                        <div class="icon">
                            <img src="img/how-it-works-img/icon-01.png" alt="">
                        </div>

                        <div class="info">
                            <div class="title">
                                <h3 class="h4 fw--700">Hesap Oluşturun</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Info Item End -->

                    <!-- Info Item Start -->
                    <div class="info--item clearfix">
                        <div class="icon">
                            <img src="img/how-it-works-img/icon-02.png" alt="">
                        </div>

                        <div class="info">
                            <div class="title">
                                <h3 class="h4 fw--700">Gruplara Katılın</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Info Item End -->

                    <!-- Info Item Start -->
                    <div class="info--item clearfix">
                        <div class="icon">
                            <img src="img/how-it-works-img/icon-03.png" alt="">
                        </div>

                        <div class="info">
                            <div class="title">
                                <h3 class="h4 fw--700">Bir Tartışma Başlatın</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Info Item End -->

                    <!-- Info Item Start -->
                    <div class="info--item clearfix">
                        <div class="icon">
                            <img src="img/how-it-works-img/icon-04.png" alt="">
                        </div>

                        <div class="info">
                            <div class="title">
                                <h3 class="h4 fw--700">Etkinliklere Katılın</h3>
                            </div>

                            <div class="desc">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Info Item End -->
                </div>
                <!-- Info Items End -->
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section End -->

<!-- Most Popular Groups Section Start -->
<section class="section bg-lighter pt--70 pb--70">
    <div class="container">
        <!-- Box Nav Start -->
        <div class="box--nav clearfix">
            <h2 class="h2 fw--600 float--left">Gruplar</h2>

            {{--<ul class="nav ff--primary float--right">--}}
                {{--<li class="active"><a href="#boxItemsTab01" class="btn btn-default" data-toggle="tab">Newest</a></li>--}}
                {{--<li><a href="#boxItemsTab02" class="btn btn-default" data-toggle="tab">Active</a></li>--}}
                {{--<li><a href="#boxItemsTab03" class="btn btn-default" data-toggle="tab">Popular</a></li>--}}
                {{--<li><a href="#boxItemsTab04" class="btn btn-default" data-toggle="tab">Alphabetic</a></li>--}}
            {{--</ul>--}}
        </div>
        <!-- Box Nav End -->

        <!-- Tab Content Start -->
        <div class="tab-content">
            <!-- Tab Pane Start -->
            <div class="tab-pane fade in active" id="boxItemsTab01">
                <!-- Box Items Start -->
                <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false" data-owl-responsive='{"0": {"items": "1"}, "481": {"items": "2"}, "768": {"items": "3"}, "992": {"items": "4"}}'>
                    @foreach(\App\Group::all() as $group)
                        <!-- Box Item Start -->
                        <div class="box--item text-center">
                            <a href="/groups/{{ $group->tag }}" class="img" data-overlay="0.1">
                                <img src="{{ $group->banner }}" alt="">
                            </a>

                            <div class="info">
                                <div class="icon fs--18 text-lightest bg-primary">
                                    <i class="fa fa-eye"></i>
                                </div>

                                <div class="title">
                                    <h2 class="h6"><a href="/groups/{{ $group->tag }}">{{ $group->name }}</a></h2>
                                </div>

                                <div class="meta">
                                    <p><i class="fa mr--8 fa-clock-o"></i>{{ $group->created_at->diffForHumans() }}</p>
                                    <p><i class="fa mr--8 fa-user-o"></i>{{ $group->users->count() }} Kişi</p>
                                </div>

                                <div class="desc text-darker">
                                    <p>{{ $group->description }}</p>
                                </div>

                                <div class="action">
                                    <a href="/groups/{{ $group->tag }}">Grup Detay<i class="fa ml--10 fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Box Item End -->
                    @endforeach
                </div>
                <!-- Box Items End -->

                <!-- Box Controls Start -->
                <div class="box--controls text-center">
                    <a href="#" class="btn fs--16 btn-default" data-action="prev">
                        <i class="fa fa-caret-left"></i>
                    </a>

                    <a href="/groups" class="btn ff--primary fw--500 btn-default">Bütün Gruplar</a>

                    <a href="#" class="btn fs--16 btn-default" data-action="next">
                        <i class="fa fa-caret-right"></i>
                    </a>
                </div>
                <!-- Box Controls End -->
            </div>
            <!-- Tab Pane End -->

            <!-- Tab Pane Start -->
            <div class="tab-pane fade" id="boxItemsTab02">
                <!-- Box Items Start -->
                <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/01.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-plane"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/02.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/03.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-camera"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/04.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-paw"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/05.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-laptop"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/06.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-cutlery"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Technology</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->
                </div>
                <!-- Box Items End -->

                <!-- Box Controls Start -->
                <div class="box--controls text-center">
                    <a href="#" class="btn fs--16 btn-default" data-action="prev">
                        <i class="fa fa-caret-left"></i>
                    </a>

                    <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                    <a href="#" class="btn fs--16 btn-default" data-action="next">
                        <i class="fa fa-caret-right"></i>
                    </a>
                </div>
                <!-- Box Controls End -->
            </div>
            <!-- Tab Pane End -->

            <!-- Tab Pane Start -->
            <div class="tab-pane fade" id="boxItemsTab03">
                <!-- Box Items Start -->
                <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/01.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-plane"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/02.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/03.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-camera"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/04.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-paw"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/05.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-laptop"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/06.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-cutlery"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Technology</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->
                </div>
                <!-- Box Items End -->

                <!-- Box Controls Start -->
                <div class="box--controls text-center">
                    <a href="#" class="btn fs--16 btn-default" data-action="prev">
                        <i class="fa fa-caret-left"></i>
                    </a>

                    <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                    <a href="#" class="btn fs--16 btn-default" data-action="next">
                        <i class="fa fa-caret-right"></i>
                    </a>
                </div>
                <!-- Box Controls End -->
            </div>
            <!-- Tab Pane End -->

            <!-- Tab Pane Start -->
            <div class="tab-pane fade" id="boxItemsTab04">
                <!-- Box Items Start -->
                <div class="box--items owl-carousel" data-owl-items="4" data-owl-margin="30" data-owl-autoplay="false">
                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/01.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-plane"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Travel ( Just Take A Tour )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/02.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-music"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Music Lover ( Injoy Yourself )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/03.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-camera"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Photography ( Memories )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/04.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-paw"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Tasty Food Recipes</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/05.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-laptop"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Pet Care ( Passionately )</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->

                    <!-- Box Item Start -->
                    <div class="box--item text-center">
                        <a href="group-home.html" class="img" data-overlay="0.1">
                            <img src="img/group-img/06.jpg" alt="">
                        </a>

                        <div class="info">
                            <div class="icon fs--18 text-lightest bg-primary">
                                <i class="fa fa-cutlery"></i>
                            </div>

                            <div class="title">
                                <h2 class="h6"><a href="#">Technology</a></h2>
                            </div>

                            <div class="meta">
                                <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                <p><i class="fa mr--8 fa-user-o"></i>Public Group / 2500 Members</p>
                            </div>

                            <div class="desc text-darker">
                                <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                            </div>

                            <div class="action">
                                <a href="#">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Box Item End -->
                </div>
                <!-- Box Items End -->

                <!-- Box Controls Start -->
                <div class="box--controls text-center">
                    <a href="#" class="btn fs--16 btn-default" data-action="prev">
                        <i class="fa fa-caret-left"></i>
                    </a>

                    <a href="groups.html" class="btn ff--primary fw--500 btn-default">View All Groups</a>

                    <a href="#" class="btn fs--16 btn-default" data-action="next">
                        <i class="fa fa-caret-right"></i>
                    </a>
                </div>
                <!-- Box Controls End -->
            </div>
            <!-- Tab Pane End -->
        </div>
        <!-- Tab Content End -->
    </div>
</section>
<!-- Most Popular Groups Section End -->

<!-- Members and Testimonial Section Start -->
<section class="section pt--70 pb--20">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pb--60">
                <!-- Section Title Start -->
                <div class="section--title pb--20">
                    <div class="title">
                        <h2 class="h2">Üyeler</h2>
                    </div>
                </div>
                <!-- Section Title End -->

                <!-- Member Slider Start -->
                <div class="member--slider owl-carousel" data-owl-items="{{ \App\User::count() }}" data-owl-autoplay="false" data-bg-img="img/members-img/pattern-bg.png" data-owl-nav="true" data-owl-center="true" data-owl-responsive='{"0": {"items": "4"}, "486": {"items": "10"}, "992": {"items": "10"}}'>
                    @foreach(\App\User::all() as $user)
                        <!-- Member Item Start -->
                        <div class="member--item online">
                            <div class="vc--parent">
                                <div class="vc--child">
                                    <div class="img img-circle">
                                        <a href="#" class="btn-link">
                                            <img src="{{ $user->avatar }}" alt="">
                                        </a>
                                    </div>

                                    <div class="name">
                                        <h3 class="h6 fs--12">
                                            <a href="#" class="btn-link">{{ $user->name }} {{ $user->surname }}</a>
                                        </h3>
                                    </div>

                                    <div class="activity">
                                        <p><i class="fa mr--8 fa-clock-o"></i>{{ $user->created_at->diffForHumans() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Member Item End -->
                    @endforeach
                </div>
                <!-- Member Slider End -->
            </div>
        </div>
    </div>
</section>
<!-- Members and Testimonial Section End -->
@endsection

@section('js')

    <script>
        var map = L.map('map').setView([39.195, 34.856], 6);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var LeafIcon = L.Icon.extend({
            options: {
                shadowUrl: 'leaf-shadow.png',
                iconSize:     [70, 70],
                shadowSize:   [50, 64],
                iconAnchor:   [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor:  [-3, -76]
            }
        });

        var greenIcon = new LeafIcon({iconUrl: '{{ asset('location.png') }}'}),
            redIcon = new LeafIcon({iconUrl: '{{ asset('location.png') }}'}),
            orangeIcon = new LeafIcon({iconUrl: '{{ asset('location.png') }}'});

        @foreach(\App\Event::all() as $event)
            L.marker([{{ $event->locationx }}, {{ $event->locationy }}], {icon: greenIcon}).bindPopup('<img src="{{ asset($event->image) }}" class="img--embed-full"/><p><a href="/events/{{ $event->tag }}">{{ $event->name }}</a></p><p>{{ $event->description }}</p>').addTo(map);
        @endforeach
        {{--<img src="{{ asset($event->image) }}" width="250px"/>--}}

        // L.marker([38, 36], {icon: redIcon}).bindPopup("I am a red leaf.").addTo(map);
        // L.marker([41, 29], {icon: orangeIcon}).bindPopup("I am an orange leaf.").addTo(map);

    </script>

@endsection