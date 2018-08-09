@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="{{ asset('img/page-header-img/bg.jpg') }}" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">Giriş Yap</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Anasayfa</a></li>
                <li class="active"><span class="text-primary">Giriş Yap</span></li>
            </ul>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Wrapper Start -->
    <section class="page--wrapper pt--80 pb--20">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-6 pb--60">
                    <div class="main--content-inner">
                        <!-- Box Items Start -->
                        <div class="box--items">
                            <div class="row gutter--15 AdjustRow">
                                <!-- Comment Form Start -->
                                <div class="comment--form pt--30" data-form="validate">
                                    <h4 class="h4 pb--15">Giriş Yap</h4>
                                    <form action="/login" method="POST">
                                        <div class="row gutter--15">

                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Şifre" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 pt--10">
                                                <button type="submit" class="btn btn-sm btn-primary fs--14">Giriş Yap</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Comment Form End -->
                            </div>
                        </div>
                        <!-- Box Items End -->
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Content Start -->
                <div class="main--content col-md-6 pb--60">
                    <div class="main--content-inner">
                        <!-- Box Items Start -->
                        <div class="box--items">
                            <div class="row gutter--15 AdjustRow">
                                <!-- Comment Form Start -->
                                <div class="comment--form pt--30" data-form="validate">
                                    <h4 class="h4 pb--15">Kayıt Ol</h4>
                                    <form action="/register" method="POST">
                                        <div class="row gutter--15">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Ad" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="surname" class="form-control" placeholder="Soyad" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Şifre" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Şifre Doğrulama" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="phone" class="form-control" placeholder="Telefon">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="biography" class="form-control" placeholder="Hakkında">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="text" name="job" class="form-control" placeholder="Meslek">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="file" name="avatar" class="form-control" placeholder="Avatar">
                                                </div>
                                            </div>

                                            <div class="col-sm-12 pt--10">
                                                <button type="submit" class="btn btn-sm btn-primary fs--14">Kayıt Ol</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Comment Form End -->
                            </div>
                        </div>
                        <!-- Box Items End -->
                    </div>
                </div>
                <!-- Main Content End -->
            </div>
        </div>
    </section>
    <!-- Page Wrapper End -->

@endsection
