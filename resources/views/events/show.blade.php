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

            <div class="cover--user-activity">
                <p><i class="fa mr--8 fa-calendar"></i>{{ $event->date }}</p>
                <p><i class="fa mr--8 fa-clock-o"></i>{{ $event->start_time }}</p>
                <p><i class="fa mr--8 fa-map-marker"></i>{{ $event->location }}</p>
            </div>

            <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                <p>{{ $event->description }}</p>
            </div>
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
                                    <li class="pull-right">
                                        <form action="/events/{{ $event->tag }}/users" method="POST">
                                            <input type="submit" class="btn btn-info" value="Katıl">
                                        </form>
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
                                                    <img src="{{ asset($user->image) }}" alt="">
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