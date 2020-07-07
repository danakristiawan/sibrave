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
                <h1 class="m-0 text-dark">Petugas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin/home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Petugas</li>
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
                        <h3 class="card-title">Daftar Seluruh Petugas</h3>
                        <a href="{{ route('employee.create') }}"
                            class="btn btn-outline-info float-right"><i class="fas fa-user-plus"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Alamat</th>
                                    <th>No HP</th>
                                    <th>Rekening</th>
                                    <th>NPWP</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td>{{ $employee->nik }}</td>
                                        <td>{{ $employee->nama }}</td>
                                        <td>{{ $employee->tempatlhr }}, {{ $employee->tempatlhr.', '.date('d-m-Y', strtotime($employee->tgllhr)) }}</td>
                                        <td>{{ $employee->alamat }}</td>
                                        <td>{{ $employee->nohp }}</td>
                                        <td>{{ $employee->rekening }}</td>
                                        <td>{{ $employee->npwp }}</td>
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
    });

</script>
@endsection
