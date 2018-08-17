@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/page-header-img/bg.jpg') }}" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">{{ $subForum->name }}</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Home</a></li>
                <li><a href="#" class="btn-link">Forum</a></li>
                <li><a href="/forum/{{ $forum->tag }}" class="btn-link">{{ $forum->name }}</a></li>
                <li class="active"><span class="text-primary">{{ $subForum->name }}</span></li>
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
                                                <h4 class="h6 fw--700 text-darkest"><a href="/forum/{{ $forum->tag }}/{{ $subForum->tag }}/{{ $topic->tag }}/replies" class="btn-link">{{ $topic->name }}</a></h4>
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
                    @if(Auth::check())
                    <!-- Comment Form Start -->
                        <div class="comment--form pt--30" data-form="validate">
                            <h4 class="h4 pb--15">Bir konu oluştur</h4>

                            <form action="/forum/{{ $forum->tag }}/{{ $subForum->tag }}/topics" method="POST">
                                {{ csrf_field() }}
                                <div class="row gutter--15">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Konu Başlığı *" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="reply" placeholder="Gönderi *" class="form-control" id="ckeditor" required></textarea>
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
                                <p>Konu oluşturabilmek için giriş yapmış olmalısınız.</p>
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