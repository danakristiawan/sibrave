@extends('layouts.user.app')

@section('content-header')
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Target</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
              <li class="breadcrumb-item active">Target</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Sensus Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Uraian</th>
                      <th>Jumlah</th>
                      <th>Tenggat</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Kelurahan Tanjung Barat</td>
                      <td>5.125</td>
                      <td>15 Januari 2020</td>
                      <td>Target Awal</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Kelurahan Daan Mogot</td>
                      <td>3.123</td>
                      <td>11 Maret 2020</td>
                      <td>Target Awal</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Kelurahan Manggarai</td>
                      <td>7.321</td>
                      <td>22 Februari 2020</td>
                      <td>Target Awal</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Kelurahan Tanjung Duren</td>
                      <td>1.543</td>
                      <td>15 Maret 2020</td>
                      <td>Target Awal</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Revisi Kelurahan Tanjung Duren</td>
                      <td>2.543</td>
                      <td>25 Maret 2020</td>
                      <td>Revisi Target</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection