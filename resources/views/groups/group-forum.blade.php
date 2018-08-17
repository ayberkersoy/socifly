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
                        {{--<a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">--}}
                            {{--<img src="img/group-img/admin-avatar-01.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">--}}
                            {{--<img src="img/group-img/admin-avatar-02.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="member-activity-personal.html" data-overlay="0.3" data-overlay-color="primary">--}}
                            {{--<img src="img/group-img/admin-avatar-03.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}

                {{--<p>Group Admins</p>--}}
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
                                <li class="active"><a href="/groups/{{ $group->tag }}/forum">Forum</a></li>
                                <li><a href="/groups/{{ $group->tag }}/users">Üyeler</a></li>
                                <li><a href="/groups/{{ $group->tag }}/events">Etkinlikler</a></li>
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

                        <!-- Forum Header Start -->
                        <div class="forum--header pb--30">
                            <div class="forum--title">
                                <h3 class="h3 fw--500 text-default">Grup Forumu</h3>
                            </div>
                        </div>
                        <!-- Forum Header End -->

                        <!-- Topics List Start -->
                        <div class="topics--list">
                            <table class="table">
                                <thead class="ff--primary fs--14 text-darkest">
                                    <tr>
                                        <th>Forum</th>
                                        <th>Alt Başlıklar</th>
                                        <th>Konular</th>
                                        <th>Gönderiler</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($group->forum as $forum)
                                        <tr>
                                            <td>
                                                <h4 class="h6 fw--500 text-darkest"><a href="/forum/{{ $forum->tag }}" class="btn-link">{{ $forum->name }}</a></h4>

                                                <p>{{ $forum->description }}</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">{{ $forum->sub_forum->count() }}</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">{{ $forum->topic->count() }}</p>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest">{{ $forum->topic_replies->count() }}</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Topics List End -->
                    </div>

                    {{--<div class="alert mt--30">--}}
                        {{--<div class="alert--inner ff--primary text-white bg-primary">--}}
                            {{--<p>Oh bother! No topics were found here!</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="alert mt--20">--}}
                        {{--<div class="alert--inner ff--primary text-white bg-primary">--}}
                            {{--<p>You must be logged in to create new topics.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <!-- Main Content End -->

            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->

@endsection