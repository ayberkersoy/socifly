@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/page-header-img/bg.jpg') }}" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">Gruplar</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Anasayfa</a></li>
                <li class="active"><span class="text-primary">Gruplar</span></li>
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
                                <h2 class="h4">Gruplar : {{ \App\Group::count() }}</h2>
                            </div>
                        </div>
                        <!-- Filter Nav End -->

                        <!-- Box Items Start -->
                        <div class="box--items">
                            <div class="row gutter--15 AdjustRow">
                                @foreach($groups as $group)
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center">
                                            <a href="/groups/{{ $group->tag }}" class="img" data-overlay="0.1">
                                                <img src="{{ asset($group->banner) }}" alt="">
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
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- Box Items End -->

                        <!-- Page Count Start -->
                        <div class="page--count pt--30">
                            <label class="ff--primary fs--14 fw--500 text-darker">
                                {{ $groups->links() }}
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