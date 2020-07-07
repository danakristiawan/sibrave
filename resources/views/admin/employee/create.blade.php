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
                    <li class="breadcrumb-item"><a href="{{ route('employee.index') }}">Petugas</a>
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
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post"
                            action="{{ route('employee.store') }}" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nik') is-invalid  @enderror"
                                        name="nik" value="{{ old('nik') }}"
                                        placeholder="Isi 16 digit NIK">
                                    @error('nik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama') is-invalid  @enderror"
                                        name="nama" value="{{ old('nama') }}"
                                        placeholder="Isi nama sesuai ktp">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">TTL</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control @error('tempatlhr') is-invalid  @enderror"
                                        name="tempatlhr" value="{{ old('tempatlhr') }}"
                                        placeholder="Isi tempat lahir sesuai ktp">
                                    @error('tempatlhr')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input class="form-control  @error('tgllhr') is-invalid  @enderror"
                                            data-date-format="yyyy-mm-dd" data-provide="datepicker" name="tgllhr"
                                            value="{{ old('tgllhr') }}"
                                            placeholder="Isi tgllhr sesuai ktp">
                                        @error('tgllhr')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('alamat') is-invalid  @enderror"
                                        name="alamat" value="{{ old('alamat') }}"
                                        placeholder="Isi alamat sesuai ktp">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">No Handphone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nohp') is-invalid  @enderror"
                                        name="nohp" value="{{ old('nohp') }}"
                                        placeholder="Isi nohp sesuai ktp">
                                    @error('nohp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">No. Rekening</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('rekening') is-invalid  @enderror"
                                        name="rekening" value="{{ old('rekening') }}"
                                        placeholder="Isi rekening sesuai ktp">
                                    @error('rekening')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">NPWP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('npwp') is-invalid  @enderror"
                                        name="npwp" value="{{ old('npwp') }}"
                                        placeholder="Isi npwp sesuai ktp">
                                    @error('npwp')
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
