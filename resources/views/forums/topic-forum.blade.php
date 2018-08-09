@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/page-header-img/bg.jpg') }}" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">{{ $topic->name }}</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Anasayfa</a></li>
                <li><a href="/forum" class="btn-link">Forum</a></li>
                <li><a href="/forum/{{ $forum->tag }}">{{ $forum->name }}</a></li>
                <li><a href="/forum/{{ $forum->tag }}/{{ $subForum->tag }}/sub">{{ $subForum->name }}</a></li>
                <li class="active"><span class="text-primary">{{ $topic->name }}</span></li>
            </ul>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Wrapper Start -->
    <section class="page--wrapper pt--80 pb--20">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                    <div class="main--content-inner drop--shadow">

                        <!-- Topic Replies Start -->
                        <div class="topic--replies">
                            <ul class="nav">
                                @foreach($topic->topic_replies as $topic_reply)
                                    <li>
                                        <!-- Topic Reply Start -->
                                        <div class="topic--reply">
                                            <div class="header clearfix">
                                                <p class="date float--left">{{ $topic_reply->created_at->diffForHumans() }}</p>
                                                <p class="link float--right"><a href="#">#{{ $topic_reply->id }}</a></p>
                                            </div>

                                            <div class="body clearfix">
                                                <div class="author mr--20 float--left text-center">
                                                    <div class="avatar" data-overlay="0.3" data-overlay-color="primary">
                                                        <a href="#">
                                                            <img src="{{ asset($topic_reply->user->avatar) }}" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="name text-darkest">
                                                        <p><a href="#">{{ $topic_reply->user->username }}</a></p>
                                                    </div>

                                                    <div class="role text-uppercase">
                                                        <p class="text-white bg-primary">{{ $topic_reply->user->job }}</p>
                                                    </div>
                                                </div>

                                                <div class="content pt--20 fs--14 ov--h">
                                                    <p>{{ $topic_reply->reply }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Topic Reply End -->
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Topic Replies End -->


                    </div>

                    @if(Auth::check())
                    <!-- Comment Form Start -->
                        <div class="comment--form pt--30" data-form="validate">
                            <h4 class="h4 pb--15">Bir gönderi paylaş</h4>

                            <form action="/forum/{{ $forum->tag }}/{{ $subForum->tag }}/{{ $topic->tag }}/posts" method="POST">
                                {{ csrf_field() }}
                                <div class="row gutter--15">

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="reply" placeholder="Gönderi *" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 pt--10">
                                        <button type="submit" class="btn btn-sm btn-primary fs--14">Paylaş</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Comment Form End -->
                    @else
                        <div class="alert mt--30">
                            <div class="alert--inner ff--primary text-white bg-primary">
                                <p>Gönderi paylaşabilmek için giriş yapmış olmalısınız.</p>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Main Content End -->
            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->

@endsection