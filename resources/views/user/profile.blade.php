@extends('layouts.user.app')

@section('content-header')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Profil</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h1 class="widget-user-username">Sumarno Notokusumo</h1>
                        <h6>NIK: 3276110207840003</h6>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="{{ url('dist/img/user3.png') }}"
                            alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-3 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,200</h5>
                                    <span class="description-text">JUMLAH PEKERJAAN</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">12,000</h5>
                                    <span class="description-text">PEKERJAAN SELESAI </span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <div class="col-sm-3 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">1,000</h5>
                                    <span class="description-text">PEKERJAAN TIDAK SELESAI</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-3">
                                <div class="description-block">
                                    <h5 class="description-header">200</h5>
                                    <span class="description-text">PEKERJAAN BERJALAN</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Personalitas</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-book mr-1"></i> Sekolah</strong>

                        <p class="text-muted">
                            SMA Negeri 6, Universitas Budi Luhur 2000
                        </p>

                        <hr>

                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                        <p class="text-muted">Gang Kelor Rt. 02 Rw. 01 Kelurahan Pademangan Jakarta Utara</p>

                        <hr>

                        <strong><i class="fas fa-pencil-alt mr-1"></i> Keterampilan</strong>

                        <p class="text-muted">
                            <span class="tag tag-danger">Desain,</span>
                            <span class="tag tag-success">Administrasi Perkantoran,</span>
                            <span class="tag tag-info">Microsoft Office,</span>
                            <span class="tag tag-warning">Public Speaking</span>
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Catatan</strong>

                        <p class="text-muted">Pekerja keras, jujur, dapat diandalkan, rajin dalam bekerja.</p>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-light">
                    <div class="card-header">
                         <h3 class="card-title">Identitas Diri Untuk Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Nomor KTP</td>
                      <td>3276110207840003</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Tempat, Tgl Lahir</td>
                      <td>Jakarta, 31 Juli 1989</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>NPWP</td>
                      <td>12.123.123.3-123.000</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Nomor Rekening</td>
                      <td>73274747444</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Nama Bank</td>
                      <td>Bank DKI Cabang Kemayoran</td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Atas Nama</td>
                      <td>Sumarno Notokusumo</td>
                    </tr>
                    <tr>
                      <td>7.</td>
                      <td>No Handphone</td>
                      <td>0891-1241-1211-111</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
