@extends('admin.layouts.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Forum Konuları
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
            <li class="active">Forum Konuları</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Forum Konuları</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#dataTable').DataTable({
                            "order": [[ 0, "desc" ]]
                        });
                    });
                </script>
                <table id="dataTable" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Forum Başlığı</th>
                        <th>Alt Başlık Adı</th>
                        <th>Konu Adı</th>
                        <th>Sil</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Forum Başlığı</th>
                        <th>Alt Başlık Adı</th>
                        <th>Konu Adı</th>
                        <th>Sil</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach(\App\Topic::all() as $topic)
                    <tr>
                        <td>{{ $topic->id }}</td>
                        <td>{{ $topic->forum->name }}</td>
                        <td>{{ $topic->sub_forum->name }}</td>
                        <td>{{ $topic->name }}</td>
                        <td>
                            <form action="/admin/forum-topic/{{ $topic->tag }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer">

            </div><!-- /.box-footer-->
        </div><!-- /.box -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection