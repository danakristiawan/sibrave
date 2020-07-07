@extends('layouts.admin.app')

@section('css')
<!-- DataTables -->
<link rel="stylesheet"
    href="{{ url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kegiatan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Kegiatan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Seluruh Kegiatan</h3>
                        <a href="{{ route('activity.create') }}"
                            class="btn btn-outline-info float-right" data-toggle="tooltip"
                                                data-placement="bottom" title=""
                                                data-original-title="Tambah"><i class="fas fa-layer-group"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Mulai</th>
                                    <th>Selesai</th>
                                    <th>MAK</th>
                                    <th>Petugas</th>
                                    <th>Target</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($activities as $activity)
                                    <tr>
                                        <td>{{ $activity->nama }}</td>
                                        <td>{{ date('d-m-Y', strtotime($activity->tglmulai)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($activity->tglselesai)) }}</td>
                                        <td>{{ $activity->mak }}</td>
                                        <td>{{ $activity->petugas }}</td>
                                        <td>{{ $activity->target }}</td>
                                        <td>
                                            <form
                                            action="{{ url('admin/activity/'. $activity->id.'/edit') }}"
                                            method="post" class="d-inline">
                                            @method('get')
                                            @csrf
                                            
                                            <button type="submit" class="btn btn-sm btn-success" data-toggle="tooltip"
                                                data-placement="bottom" title=""
                                                data-original-title="Ubah"><i
                                                    class="fas fa-edit"></i></button>
                                        </form>

                                        <form
                                            action="{{ url('admin/activity/'. $activity->id.'') }}"
                                            method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                                data-placement="bottom" title=""
                                                data-original-title="Hapus" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fas fa-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection

@section('js')
<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
</script>
<script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
</script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        "use strict";

        try {
            $('[data-toggle="tooltip"]').tooltip();
        } catch (error) {
            console.log(error);
        }
    });

</script>
@endsection
