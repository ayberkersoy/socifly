@extends('admin.layouts.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Forum Ekle
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li class="active"> Forum Ekle</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Forum Ekle</h3>
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
                    <form action="/admin/forum" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <p>
                                        Forum Adı
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="name" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Forum Açıklaması
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="desc" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Forum Sırası
                                    </p>
                                </td>
                                <td>
                                    <input type="text" name="order" class="form-control" value="0"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>
                                        Bağlı Olduğu Grup
                                    </p>
                                </td>
                                <td>
                                    <select name="group_id" class="form-control">
                                        <option value="0">Yok</option>
                                        @foreach(\App\Group::all() as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
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