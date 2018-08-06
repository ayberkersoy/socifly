<!-- Footer Section Start -->
<footer class="footer--section">
    <!-- Footer Widgets Start -->
    <div class="footer--widgets pt--70 pb--20 bg-lightdark" data-bg-img="img/footer-img/footer-widgets-bg.png">
        <div class="container">
            <div class="row AdjustRow">
                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Hakkımızda</h2>

                        <!-- Text Widget Start -->
                        <div class="text--widget">
                            <p>{{ $settings->about_us }}</p>
                        </div>
                        <!-- Text Widget End -->
                    </div>
                    <!-- Widget End -->

                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Forum</h2>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                @foreach(\App\Forum::take(5)->get() as $forum)
                                    <li><a href="/forum/{{ $forum->tag }}">{{ $forum->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Gruplar</h2>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                @foreach(\App\Group::take(5)->get() as $group)
                                    <li><a href="/groups/{{ $group->tag }}">{{ $group->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>

                <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                    <!-- Widget Start -->
                    <div class="widget">
                        <h2 class="h4 fw--700 widget--title">Linkler</h2>

                        <!-- Links Widget Start -->
                        <div class="links--widget">
                            <ul class="nav">
                                <li><a href="/register">Kayıt Ol</a></li>
                                <li><a href="/login">Giriş Yap</a></li>
                                <li><a href="/groups">Gruplar</a></li>
                                <li><a href="/events">Etkinlikler</a></li>
                                <li><a href="/users">Üyeler</a></li>
                            </ul>
                        </div>
                        <!-- Links Widget End -->
                    </div>
                    <!-- Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widgets End -->

    <!-- Footer Copyright Start -->
    <div class="footer--copyright pt--30 pb--30 bg-darkest">
        <div class="container">
            <div class="text fw--500 fs--14 text-center">
                <p>Tüm hakları saklıdır.</p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Footer Section End -->