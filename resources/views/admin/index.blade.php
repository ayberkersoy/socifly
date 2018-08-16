@extends('admin.layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Anasayfa
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{ \App\User::count() }}</h3>

                            <p>Üye</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="/admin/users" class="small-box-footer">Üyeler <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{ \App\Event::count() }}</h3>

                            <p>Etkinlikler</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <a href="/admin/events" class="small-box-footer">Etkinlikler <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{ \App\Group::count() }}</h3>

                            <p>Grup</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="/admin/groups" class="small-box-footer">Gruplar <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{ \App\Forum::count() }}</h3>

                            <p>Forum Başlığı</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-aperture"></i>
                        </div>
                        <a href="/admin/forum" class="small-box-footer">Forum <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Genel Ayarlar</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/admin" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Site Başlığı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="title" class="form-control" value="{{ $setting->title }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Site Açıklaması
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="description" class="form-control" value="{{ $setting->description }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Keywords
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="keywords" class="form-control" value="{{ $setting->keywords }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Logo
                                    </p>
                                </td>
                                <td>
                                    <input type="file" name="logo" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Banner
                                    </p>
                                </td>
                                <td>
                                    <input type="file" name="banner" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Telefon
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="phone" class="form-control" value="{{ $setting->phone }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        E-mail
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="email" class="form-control" value="{{ $setting->email }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Adres
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="address" class="form-control" value="{{ $setting->address }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Hakkımızda
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="about_us" class="form-control" value="{{ $setting->about_us }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Facebook
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="facebook" class="form-control" value="{{ $setting->facebook }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Twitter
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="twitter" class="form-control" value="{{ $setting->twitter }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Instagram
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="instagram" class="form-control" value="{{ $setting->instagram }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Youtube
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="youtube" class="form-control" value="{{ $setting->youtube }}"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Kaydet" class="btn btn-success">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection