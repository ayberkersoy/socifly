@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">{{ $forum->name }}</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Anasayfa</a></li>
                <li><a href="#" class="btn-link">Forum</a></li>
                <li class="active"><span class="text-primary">{{ $forum->name }}</span></li>
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
                        <!-- Topics List Start -->
                        <div class="topics--list">
                            <table class="table">
                                {{--<thead class="ff--primary fs--14 text-darkest">--}}
                                    {{--<tr>--}}
                                        {{--<th>Forum</th>--}}
                                        {{--<th>Konular</th>--}}
                                        {{--<th>Gönderiler</th>--}}
                                    {{--</tr>--}}
                                {{--</thead>--}}

                                <tbody>
                                @foreach($forum->sub_forum as $sub_forum)
                                    <tr>
                                        <td>
                                            <h4 class="h6 fw--700 text-darkest fs--16"><i class="fa fa-comments-o"></i> <a href="/forum/{{ $forum->tag }}/{{ $sub_forum->tag }}/sub" class="btn-link">{{ $sub_forum->name }}</a></h4>

                                            <p>{{ $sub_forum->description }}</p>
                                        </td>
                                        <td>
                                            <p class="ff--primary fw--500 fs--14 text-darkest">Konular</p>
                                            <p class="ff--primary fw--500 fs--14 text-darkest">{{ $sub_forum->topic->count() }}</p>
                                        </td>
                                        <td>
                                            <p class="ff--primary fw--500 fs--14 text-darkest text-center">Gönderiler</p>
                                            <p class="ff--primary fw--500 fs--14 text-darkest text-center">{{ $sub_forum->topic_replies->count() }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Topics List End -->
                    </div>

                    <div class="main--content-inner drop--shadow mt--30">
                        <!-- Topics List Start -->
                        <div class="topics--list">
                            <table class="table">
                                <thead class="ff--primary fs--14 text-darkest">
                                    <tr>
                                        <th>Konular</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($forum->topic as $topic)
                                        <tr class="pinned">
                                            <td>
                                                <h4 class="h6 fw--700 text-darkest"><a href="/forum/{{ $forum->tag }}/{{ $sub_forum->tag }}/{{ $topic->tag }}/replies" class="btn-link">{{ $topic->name }}</a></h4>
                                            </td>
                                            <td>
                                                <p class="ff--primary fw--500 fs--14 text-darkest text-center">Gönderiler</p>
                                                <p class="ff--primary fw--500 fs--14 text-darkest text-center">{{ $topic->topic_replies->count() }}</p>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Topics List End -->
                    </div>
                    
                </div>
                <!-- Main Content End -->

            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->

@endsection