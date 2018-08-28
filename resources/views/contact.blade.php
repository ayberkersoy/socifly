@extends('layouts.layout')

@section('content')

    <!-- Page Header Start -->
    <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
        <div class="container">
            <div class="title">
                <h2 class="h1 text-white">İletişim</h2>
            </div>

            <ul class="breadcrumb text-gray ff--primary">
                <li><a href="/" class="btn-link">Anasayfa</a></li>
                <li class="active"><span class="text-primary">İletişim</span></li>
            </ul>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Section Start -->
    <div class="contact--section pt--80 pb--20">
        <div class="container">
            <!-- Map Start -->
            <div class="map mb--80" data-trigger="map" data-map-options='{"latitude": "23.790546", "longitude": "90.375583", "zoom": "16", "api_key": "AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"}'></div>
            <!-- Map End -->

            <div class="row">
                <div class="col-md-3 pb--60">
                    <!-- Contact Info Items Start -->
                    <div class="contact-info--items" data-scroll-reveal="group">
                        <!-- Contact Info Item Start -->
                        <div class="contact-info--Item">
                            <div class="title">
                                <h3 class="h4"><i class="mr--10 fa fa-map-o"></i>Adres :</h3>
                            </div>

                            <div class="content fs--14 text-darker mt--4">
                                <p>{{ $settings->address }}</p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info--Item">
                            <div class="title">
                                <h3 class="h4"><i class="mr--10 fa fa-envelope-o"></i>E-mail :</h3>
                            </div>

                            <div class="content fs--14 text-darker mt--4">
                                <p><a href="mailto:{{ $settings->email }}" class="btn-link">{{ $settings->email }}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->

                        <!-- Contact Info Item Start -->
                        <div class="contact-info--Item">
                            <div class="title">
                                <h3 class="h4"><i class="mr--10 fa fa-phone"></i>Telefon :</h3>
                            </div>

                            <div class="content fs--14 text-darker mt--4">
                                <p><a href="#" class="btn-link">{{ $settings->phone }}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Item End -->
                    </div>
                    <!-- Contact Info Items End -->
                </div>

                <div class="col-md-9 pb--60">
                    <!-- Contact Form Start -->
                    <div class="contact--form" data-form="ajax">
                        <div class="contact--title">
                            <h3 class="h4">Bize bir mesaj bırakın</h3>
                        </div>

                        <div class="contact--notes ff--primary mt--2">
                            <p>(Gerekli alanlar *(yıldız) ile belirtilmiştir.)</p>
                        </div>

                        <form action="/contact" method="post">
                            <div class="row gutter--20">
                                <div class="col-xs-6 col-xxs-12">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Ad & Soyad *" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-xs-6 col-xxs-12">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Konu *" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mesaj *" class="form-control" required></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-primary mt--10">Gönder</button>
                                </div>
                            </div>

                            <div class="status"></div>
                        </form>
                    </div>
                    <!-- Contact Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

@endsection