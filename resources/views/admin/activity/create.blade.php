@extends('layouts.admin.app')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('activity.index') }}">Kegiatan</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post"
                            action="{{ route('activity.store') }}" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama') is-invalid  @enderror"
                                        name="nama" value="{{ old('nama') }}"
                                        placeholder="Isi nama kegiatan">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Tgl Mulai</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input class="form-control  @error('tglmulai') is-invalid  @enderror"
                                            data-date-format="yyyy-mm-dd" data-provide="datepicker" name="tglmulai"
                                            value="{{ old('tglmulai') }}"
                                            placeholder="Isi tgl mulai">
                                        @error('tglmulai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Tgl Selesai</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input class="form-control  @error('tglselesai') is-invalid  @enderror"
                                            data-date-format="yyyy-mm-dd" data-provide="datepicker" name="tglselesai"
                                            value="{{ old('tglselesai') }}"
                                            placeholder="Isi tgl selesai">
                                        @error('tglselesai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Mata Anggaran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('mak') is-invalid  @enderror"
                                        name="mak" value="{{ old('mak') }}"
                                        placeholder="Isi mata anggaran">
                                    @error('mak')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Jumlah Petugas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('petugas') is-invalid  @enderror"
                                        name="petugas" value="{{ old('petugas') }}"
                                        placeholder="Isi jumlah petugas">
                                    @error('petugas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Jumlah Target</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('target') is-invalid  @enderror"
                                        name="target" value="{{ old('target') }}"
                                        placeholder="Isi jumlah target">
                                    @error('target')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
