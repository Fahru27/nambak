@extends('layout.v_template')

@section('title', 'Kolam')

@section('content')

    <div class="row">
            <div class="col-md-6">
                <!-- AREA CHART -->
                <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Kolam {{ $kolam1->jenis }}</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                    <canvas id="lineChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
    </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
    $(function () {

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart1').get(0).getContext('2d')
        var lineChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: false,
        },
        scales: {
            xAxes: [{
            gridLines : {
                display : true,
            }
            }],
            yAxes: [{
            gridLines : {
                display : true,
            }
            }]
        }
        }

        var lineChartData = {
        labels  : [
            @foreach($kolam1 as $item)
            '{{ $item->jumlah_awal }}',
            @endforeach
            ],
        datasets: [
            {
            label               : 'Ph Air',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : 3,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [
                @foreach($kolam1 as $item)
                '{{ $item->jumlah_awal }}',
            @endforeach
            ]
            },
        ]
        } 

        lineChartData.datasets[0].fill = false;
        lineChartOptions.datasetFill = false;

        var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
        })
 })
</script>
@endsection