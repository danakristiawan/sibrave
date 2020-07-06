@extends('layouts.user.app')

@section('content-header')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Kegiatan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Kegiatan</li>
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
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header text-muted border-bottom-0">
                        Sensus
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>Sensus Penduduk</b></h2>
                                <p class="text-muted text-sm"><b>Keterangan: </b> Sensus yang bertujuan untuk menghitung
                                    jumlah penduduk </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small mb-2"><span class="fa-li"><i
                                                class="fas fa-lg fa-calendar-check"></i></span> mulai: 1 Januari 2020
                                    </li>
                                    <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-calendar-times"></i></span> selesai: 31 Desember
                                        2020</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="{{ url('dist/img/sensus_penduduk.jpeg') }}" alt=""
                                    class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="{{ url('target') }}" class="btn btn-sm bg-teal">
                                <i class="fas fa-tasks"></i> Target
                            </a>
                            <a href="{{ url('achievement') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-poll"></i> Capaian
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header text-muted border-bottom-0">
                        Sensus
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>Sensus Ekonomi</b></h2>
                                <p class="text-muted text-sm"><b>Keterangan: </b> Sensus yang bertujuan untuk menghitung
                                    jumlah ekonomi </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small mb-2"><span class="fa-li"><i
                                                class="fas fa-lg fa-calendar-check"></i></span> mulai: 1 Juli 2020</li>
                                    <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-calendar-times"></i></span> selesai: 31 Agustus 2020
                                    </li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="{{ url('dist/img/sensus_ekonomi.jpeg') }}" alt=""
                                    class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-tasks"></i> Target
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-poll"></i> Capaian
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-header text-muted border-bottom-0">
                        Sensus
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-7">
                                <h2 class="lead"><b>Sensus Pertanian</b></h2>
                                <p class="text-muted text-sm"><b>Keterangan: </b> Sensus yang bertujuan untuk menghitung
                                    jumlah pertanian </p>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small mb-2"><span class="fa-li"><i
                                                class="fas fa-lg fa-calendar-check"></i></span> mulai: 1 Maret 2020</li>
                                    <li class="small"><span class="fa-li"><i
                                                class="fas fa-lg fa-calendar-times"></i></span> selesai: 31 September
                                        2020</li>
                                </ul>
                            </div>
                            <div class="col-5 text-center">
                                <img src="{{ url('dist/img/sensus_pertanian.jpeg') }}" alt=""
                                    class="img-circle img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                                <i class="fas fa-tasks"></i> Target
                            </a>
                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-poll"></i> Capaian
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
