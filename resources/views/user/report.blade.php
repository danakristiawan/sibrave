@extends('layouts.user.app')

@section('content-header')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Laporan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Laporan</li>
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
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title"></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mb-4">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="sales-chart" height="320" style="display: block; height: 200px; width: 338px;"
                                width="540" class="chartjs-render-monitor"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> Target
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Capaian
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kegiatan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Uraian</th>
                      <th>Pelaksanaan</th>
                      <th>Target</th>
                      <th>Capaian</th>
                      <th>Persentase</th>
                      <th style="width: 40px">%</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Sensus Penduduk 2010</td>
                      <td>1 Januari 2010 - 31 Maret 2010</td>
                      <td>5.125</td>
                      <td>4.000</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Sensus Ekonomi 2012</td>
                      <td>1 Maret 2012 - 31 Agustus 2012</td>
                      <td>3.123</td>
                      <td>1.200</td>
                      <td>
                        <div class="progress progress-xs">
                          <div class="progress-bar bg-warning" style="width: 70%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-warning">70%</span></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Sensus Pertanian 2013</td>
                      <td>1 Februari 2013 - 31 Maret 2013</td>
                      <td>7.321</td>
                      <td>8.000</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-primary">30%</span></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Sensus Penduduk 2020</td>
                      <td>1 April 2020 - 31 Mei 2020</td>
                      <td>2.543</td>
                      <td>3.400</td>
                      <td>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <td><span class="badge bg-success">90%</span></td>
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

@section('js')
    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
    <script>
        $(function() {
    "use strict";

    var ticksStyle = {
        fontColor: "#495057",
        fontStyle: "bold"
    };

    var mode = "index";
    var intersect = true;

    var $salesChart = $("#sales-chart");
    var salesChart = new Chart($salesChart, {
        type: "bar",
        data: {
            labels: [
                "SP2010",
                "SE2012",
                "ST2013",
                "SP2020",
                "SE2016",
                "ST2016",
                "SE2018"
            ],
            datasets: [
                {
                    backgroundColor: "#007bff",
                    borderColor: "#007bff",
                    data: [1000, 2000, 3000, 2500, 2700, 2500, 3000]
                },
                {
                    backgroundColor: "#ced4da",
                    borderColor: "#ced4da",
                    data: [700, 1700, 2700, 2000, 1800, 1500, 2000]
                }
            ]
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                mode: mode,
                intersect: intersect
            },
            hover: {
                mode: mode,
                intersect: intersect
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [
                    {
                        // display: false,
                        gridLines: {
                            display: true,
                            lineWidth: "4px",
                            color: "rgba(0, 0, 0, .2)",
                            zeroLineColor: "transparent"
                        },
                        ticks: $.extend(
                            {
                                beginAtZero: true,

                                // Include a dollar sign in the ticks
                                callback: function(value, index, values) {
                                    // if (value >= 1000) {
                                    //     value /= 1000;
                                    //     value += "000";
                                    // }
                                    return value;
                                }
                            },
                            ticksStyle
                        )
                    }
                ],
                xAxes: [
                    {
                        display: true,
                        gridLines: {
                            display: false
                        },
                        ticks: ticksStyle
                    }
                ]
            }
        }
    });
});
    </script>
@endsection