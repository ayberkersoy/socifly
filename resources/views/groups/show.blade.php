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
                                <li class="active"><a href="#">Anasayfa</a></li>
                                <li><a href="/groups/{{ $group->tag }}/forum">Forum</a></li>
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
                                @else
                                    <li class="pull-right">
                                        Gruba katılmak için <button class="btn btn-success" onclick="location.href='/login';">Giriş Yapın</button>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Content Nav End -->

                        <!-- Activity List Start -->
                        <div class="activity--list">
                            <!-- Activity Items Start -->
                            <ul class="activity--items nav">
                                @foreach($group->posts as $post)
                                    <li>
                                        <!-- Activity Item Start -->
                                        <div class="activity--item">
                                            <div class="activity--avatar">
                                                <a href="#">
                                                    <img src="{{ asset($post->user->avatar) }}" alt="">
                                                </a>
                                            </div>

                                            <div class="activity--info fs--14">
                                                <div class="activity--header">
                                                    <p><a href="#">{{ $post->user->username }}</a> bir gönderi paylaştı.</p>
                                                </div>

                                                <div class="activity--meta fs--12">
                                                    <p><i class="fa mr--8 fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</p>
                                                </div>

                                                <div class="activity--content">
                                                    <p>{{ $post->post }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Activity Item End -->
                                    </li>
                                @endforeach
                            </ul>
                            <!-- Activity Items End -->
                        </div>
                        <!-- Activity List End -->
                    </div>

                    @if(Auth::check())
                        @if($group->users()->where('user_id', auth()->id())->exists())
                            <!-- Comment Form Start -->
                            <div class="comment--form pt--30" data-form="validate">
                                <h4 class="h4 pb--15">Bir gönderi paylaş</h4>

                                <form action="/groups/{{ $group->tag }}/posts" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row gutter--15">

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea name="post" placeholder="Gönderi *" class="form-control" id="ckeditor" required></textarea>
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
                                    <p>Gönderi paylaşabilmek için gruba katılmış olmalısınız.</p>
                                </div>
                            </div>
                        @endif
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

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#ckeditor' ) );
    </script>
@endsection