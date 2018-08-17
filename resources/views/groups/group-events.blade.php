@extends('layouts.layout')

@section('content')

    <!-- Cover Header Start -->
    <div class="cover--header pt--80 text-center" data-bg-img="{{ asset($group->banner) }}" data-overlay="0.6" data-overlay-color="white">
        <div class="container">
            <div class="cover--avatar" data-overlay="0.3" data-overlay-color="primary">
                <img src="{{ asset($group->image) }}" alt="">
            </div>

            <div class="cover--user-name">
                <h2 class="h3 fw--600">{{ $group->name }}</h2>
            </div>

            <div class="cover--user-activity">
                <p><i class="fa mr--8 fa-clock-o"></i>{{ $group->created_at->format('d/m/Y') }}</p>
                <p><i class="fa mr--8 fa-user-o"></i>{{ $group->users->count() }} Kişi</p>
            </div>

            {{--<div class="cover--avatars">--}}
            {{--<ul class="nav">--}}
            {{--<li>--}}
            {{--<a href="#" data-overlay="0.3" data-overlay-color="primary">--}}
            {{--<img src="{{ asset($group->user->avatar) }}" alt="">--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}

            {{--<p>Grup Admini</p>--}}
            {{--</div>--}}

            <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                <p>{{ $group->description }}</p>
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
                                <li><a href="/groups/{{ $group->tag }}">Anasayfa</a></li>
                                <li><a href="/groups/{{ $group->tag }}/forum">Forum</a></li>
                                <li><a href="/groups/{{ $group->tag }}/users">Üyeler</a></li>
                                <li class="active"><a href="/groups/{{ $group->tag }}/events">Etkinlikler</a></li>
                                @if(Auth::check())
                                    @if($group->users()->where('user_id', auth()->id())->exists())
                                        <li class="pull-right">
                                            <button class="btn btn-info">Katıldınız</button>
                                            <button class="btn btn-success" onclick="location.href='/groups/{{ $group->tag }}/events/create';"><i class="fa fa-plus"></i> Yeni Etkinlik Oluştur</button>
                                        </li>
                                    @else
                                        <li class="pull-right">
                                            <form action="/groups/{{ $group->tag }}/users" method="POST">
                                                {{ csrf_field() }}
                                                <input type="submit" class="btn btn-info" value="Katıl">
                                            </form>
                                        </li>
                                    @endif
                                @endif
                            </ul>
                        </div>
                        <!-- Content Nav End -->

                        <!-- Member Items Start -->
                        <div class="member--items">
                            <div class="row gutter--15 AdjustRow">
                                @foreach($group->events as $event)
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="/events/{{ $event->tag }}" class="img" data-overlay="0.1">
                                                <img src="{{ asset($event->banner) }}" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest bg-primary">
                                                    <i class="fa fa-eye"></i>
                                                </div>

                                                <div class="title">
                                                    <h2 class="h6"><a href="/events/{{ $event->tag }}">{{ $event->name }}</a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-calendar"></i>{{ $event->date }}</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>{{ $event->start_time }}</p>
                                                    <p><i class="fa mr--8 fa-map-marker"></i>{{ $event->location }}</p>
                                                </div>

                                                <div class="action">
                                                    <a href="/events/{{ $event->tag }}">Etkinlik Detay<i class="fa ml--10 fa-caret-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Box Item End -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Member Items End -->

                        {{--<!-- Page Count Start -->--}}
                        {{--<div class="page--count pt--30">--}}
                            {{--<label class="ff--primary fs--14 fw--500 text-darker">--}}
                                {{--{{ $users->links() }}--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<!-- Page Count End -->--}}
                    </div>
                </div>
                <!-- Main Content End -->

            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->

@endsection