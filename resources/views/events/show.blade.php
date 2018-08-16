@extends('layouts.layout')

@section('content')

    <!-- Cover Header Start -->
    <div class="cover--header pt--80 text-center" data-bg-img="{{ asset($event->banner) }}" data-overlay="0.6" data-overlay-color="white">
        <div class="container">
            <div class="cover--avatar" data-overlay="0.3" data-overlay-color="primary">
                <img src="{{ asset($event->image) }}" alt="">
            </div>

            <div class="cover--user-name">
                <h2 class="h3 fw--600">{{ $event->name }}</h2>
            </div>

            <div class="cover--user-activity pull-left col-md-4 pt--10">
                <ul class="ff--primary fs--14 fw--500" style="list-style: none;">
                    <li style="text-align: left;">
                        <p><i class="fa fa-calendar"></i> {{ $event->date }}</p><br>
                    </li>
                    <li style="text-align: left; margin-top: -20px;">
                        <p><i class="fa fa-clock-o"></i> {{ $event->start_time }}</p><br>
                    </li>
                    <li style="text-align: left; margin-top: -20px;">
                        <p><i class="fa fa-map-marker"></i> {{ $event->location }}</p>
                    </li>
                </ul>
            </div>
            <div class="cover--user-activity pull-left col-md-8 pt--10">
                <p style="text-align: left;">{{ $event->description }}</p>
            </div>

            {{--<div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">--}}
                {{--<p>{{ $event->description }}</p>--}}
            {{--</div>--}}
        </div>
    </div>
    <!-- Cover Header End -->

    <!-- Page Wrapper Start -->
    <section class="page--wrapper pt--80 pb--20">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                    <div class="main--content-inner drop--shadow">
                        <!-- Content Nav Start -->
                        <div class="content--nav pb--30">
                            <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                <li class="active"><a href="#">Katılımcılar: {{ $event->users->count() }}</a></li>
                                @if(Auth::check())
                                    @if($event->users()->where('user_id', auth()->id())->exists())

                                    @else
                                        <li class="pull-right">
                                            <form action="/events/{{ $event->tag }}/users" method="POST">
                                                {{ csrf_field() }}
                                                <input type="submit" class="btn btn-info" value="Etkinliğe Katıl">
                                            </form>
                                        </li>
                                    @endif
                                @else
                                    <li class="pull-right">
                                        Etkinliğe katılmak için <button class="btn btn-success" onclick="location.href='/login';">Giriş Yapın</button>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Content Nav End -->

                        <!-- Member Items Start -->
                        <div class="member--items">
                            <div class="row gutter--15 AdjustRow">
                                @foreach($event->users as $user)
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Member Item Start -->
                                        <div class="member--item">
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
                                                <p><i class="fa mr--8 fa-user"></i>{{ $user->username }}</p>
                                                <p><i class="fa mr--8 fa-mail-forward"></i>{{ $user->email }}</p>
                                                <p><i class="fa mr--8 fa-briefcase"></i>{{ $user->job }}</p>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Member Items End -->
                    </div>

                </div>
                <!-- Main Content End -->
            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->

@endsection