@extends('layouts.user.app')

@section('content-header')
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Capaian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
              <li class="breadcrumb-item active">Capaian</li>
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
                <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Uraian</th>
                      <th>Jumlah</th>
                      <th>Progres</th>
                      <th style="width: 40px">%</th>
                      <th style="width: 40px">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Kelurahan Tanjung Barat</td>
                      <td>5.125</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                      <td><a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Kelurahan Daan Mogot</td>
                      <td>3.123</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                      <td><a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Kelurahan Manggarai</td>
                      <td>7.321</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                      <td><a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Kelurahan Tanjung Duren</td>
                      <td>2.543</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
                      <td><a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-edit"></i></a></td>
                    </tr>
                  </tbody>
                </table>
                </div>
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

@section('modal')
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Capaian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form">
                  <div class="form-group">
                    <label for="capaian">Input Data :</label>
                    <input type="text" class="form-control" id="capaian" placeholder="Masukkan data capaian..">
                  </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection