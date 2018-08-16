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

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Anasayfa</h3>
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
                    {{--<form action="/admin/logo" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Logo--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="file" name="logo" class="form-control" />--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}

                    {{--<form action="/admin/asama_bir" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Aşama Bir--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="file" name="asama_bir" class="form-control" />--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}

                    {{--<form action="/admin/asama_iki" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Aşama İki--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="file" name="asama_iki" class="form-control" />--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}

                    {{--<form action="/admin/asama_uc" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Aşama Üç--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="file" name="asama_uc" class="form-control" />--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}

                    {{--<form action="/admin/asama_dort" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Aşama Dört--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<input type="file" name="asama_dort" class="form-control" />--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}
                    {{--<script src="https://cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>--}}
                    {{--<form action="/admin/yapidenetimyazisi" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Anasayfa Biz Kimiz Yazısı--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<textarea name="text_yapi" id="text_yapi" rows="10" cols="80">--}}
                                        {{--{{ $index->text_yapi }}--}}
                                    {{--</textarea>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}

                    {{--<form action="/admin/anasayfahakkimizda" method="post" enctype="multipart/form-data">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<p>--}}
                                        {{--Anasayfa Hakkımızda Yazısı--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                {{--<textarea name="text_hakkimizda" id="text_hakkimizda" rows="10" cols="80">--}}
                                    {{--{{ $index->text_hakkimizda }}--}}
                                {{--</textarea>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>--}}
                                    {{--<input type="submit" value="Düzenle" class="btn btn-success">--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</table>--}}
                    {{--</form>--}}
                    <script>
                        CKEDITOR.replace( 'text_yapi' );
                        CKEDITOR.replace( 'text_hakkimizda' );
                    </script>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
@endsection