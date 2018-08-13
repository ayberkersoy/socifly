@extends('layouts.layout')

@section('content')

    <!-- Cover Header Start -->
    <div class="cover--header pt--80 text-center" data-bg-img="{{ asset($user->banner) }}" data-overlay="0.6" data-overlay-color="white">
        <div class="container">
            <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
                <img src="{{ asset($user->avatar) }}" alt="">
            </div>

            <div class="cover--user-name">
                <h2 class="h3 fw--600">{{ $user->name }} {{ $user->surname }}</h2>
            </div>

            <div class="cover--user-activity">
                <p><i class="fa mr--8 fa-clock-o"></i>{{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                <p>{{ $user->biography }}</p>
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

                        <!-- Profile Details Start -->
                        <div class="profile--details fs--14">
                            <!-- Profile Item Start -->
                            <div class="profile--item">
                                <div class="profile--heading">
                                    <h3 class="h4 fw--700">
                                        <span class="mr--4">Hakkımda</span>
                                        <i class="ml--10 text-primary fa fa-caret-right"></i>
                                    </h3>
                                </div>

                                <div class="profile--info">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="/users/{{ $user->username }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <table class="table">
                                            <tr>
                                                <th class="fw--700 text-darkest">Ad</th>
                                                <td><input type="text" name="name" class="form-control" value="{{ $user->name }}"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Soyad</th>
                                                <td><input type="text" name="surname" class="form-control" value="{{ $user->surname }}"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Telefon</th>
                                                <td><input type="text" name="phone" class="form-control" value="{{ $user->phone }}"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Doğum Tarihi</th>
                                                <td><input type="text" name="date_of_birth" class="form-control" value="{{ $user->date_of_birth }}"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Hakkımda</th>
                                                <td><input type="text" name="biography" class="form-control" value="{{ $user->biography }}"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Meslek</th>
                                                <td><input type="text" name="job" class="form-control" value="{{ $user->job }}"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Şifre</th>
                                                <td><input type="password" name="password" class="form-control" placeholder="Yeni Şifrenizi Girin"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Şifre Doğrulama</th>
                                                <td><input type="password" name="password_confirmation" class="form-control" placeholder="Yeni Şifrenizi Doğrulayın"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Profil Fotoğrafı</th>
                                                <td><input type="file" name="avatar" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Kapak Resmi</th>
                                                <td><input type="file" name="banner" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><input type="submit" class="btn btn-success" value="Kaydet"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <!-- Profile Item End -->
                        </div>
                        <!-- Profile Details End -->
                    </div>
                </div>
                <!-- Main Content End -->
            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->


@endsection