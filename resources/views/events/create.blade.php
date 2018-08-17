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
                                {{-- form --}}
                                <form action="/groups/{{ $group->tag }}/events" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row gutter--15">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Etkinlik Adı</p>
                                                <input type="text" name="name" placeholder="Etkinlik Adı *" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Etkinlik Açıklama</p>
                                                <textarea name="desc" placeholder="Açıklama *" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Adres</p>
                                                <input type="text" name="location" placeholder="Adres *" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Etkinlik Tarihi</p>
                                                <input type="text" name="date" placeholder="Etkinlik Tarihi *" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Başlama Saati</p>
                                                <input type="text" name="start_time" placeholder="Başlama Saati *" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Etkinlik Logo</p>
                                                <input type="file" name="image" placeholder="Etkinlik Logo *" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Banner</p>
                                                <input type="file" name="banner" placeholder="Banner" class="form-control" required />
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Harita X Ekseni (<a href="https://www.openstreetmap.org/">OpenStreenMap</a> üzerinden konum bilgisine ulaşabilirsiniz.)</p>
                                                <input type="text" name="locationx" placeholder="Harita X Ekseni" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <p>Harita Y Ekseni (<a href="https://www.openstreetmap.org/">OpenStreenMap</a> üzerinden konum bilgisine ulaşabilirsiniz.)</p>
                                                <input type="text" name="locationy" placeholder="Harita Y Ekseni" class="form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 pt--10">
                                            <button type="submit" class="btn btn-sm btn-primary fs--14">Oluştur</button>
                                        </div>
                                    </div>
                                </form>
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