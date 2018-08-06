@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/page-header-img/bg.jpg') }}" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">Üyeler</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Anasayfa</a></li>
                <li class="active"><span class="text-primary">Üyeler</span></li>
            </ul>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Wrapper Start -->
    <section class="page--wrapper pt--80 pb--20">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-12 pb--60">
                    <div class="main--content-inner">
                        <!-- Filter Nav Start -->
                        <div class="filter--nav pb--30 clearfix">
                            <div class="filter--link float--left">
                                <h2 class="h4">Üyeler : {{ \App\User::where('status', 1)->count() }}</h2>
                            </div>
                        </div>
                        <!-- Filter Nav End -->

                        <!-- Member Items Start -->
                        <div class="member--items">
                            <div class="row gutter--15 AdjustRow">
                                <div class="col-md-3 col-xs-6 col-xxs-12">
                                    @foreach($users as $user)
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
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Member Items End -->

                        <!-- Box Items Start -->
                        <div class="box--items">
                            <div class="row gutter--15 AdjustRow">
                                @foreach($users as $user)

                                @endforeach
                            </div>
                        </div>
                        <!-- Box Items End -->

                        <!-- Page Count Start -->
                        <div class="page--count pt--30">
                            <label class="ff--primary fs--14 fw--500 text-darker">
                                {{ $users->links() }}
                            </label>
                        </div>
                        <!-- Page Count End -->
                    </div>
                </div>
                <!-- Main Content End -->
            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->


@endsection()