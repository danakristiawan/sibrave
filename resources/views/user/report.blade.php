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