@extends('admin.layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Etkinlik Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active"> Etkinlik Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Etkinlik Ekle</h3>
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
                    <form action="/admin/events" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Etkinlik Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Etkinlik Açıklaması
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="desc" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Adres
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="location" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Tarih
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="date" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Başlama Saati
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="start_time" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Grup
                                    </p>
                                </td>
                                <td>
                                    <select name="group_id" class="form-control">
                                        <option value="0">Grup Seçiniz</option>
                                        @foreach(\App\Group::all() as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Harita X Ekseni
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="locationx" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Harita Y Ekseni
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="locationy" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Logo
                                    </p>
                                </td>
                                <td>
                                    <input type="file" name="logo" class="form-control"/>
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