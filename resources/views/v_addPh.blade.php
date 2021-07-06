@extends('layout.v_template')

@section('title', 'Ph Air')

@section('content')

  <div class="row">
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Kolam Ikan Emas</h3>

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
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Kolam Ikan Nila</h3>

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
                  <canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
  </div>
    <div class="row">
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Kolam Ikan Lele</h3>

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
                  <canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kolam Ikan Mujair</h3>

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
                  <canvas id="lineChart4" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
  </div>
  <form method="POST" action="/Ph_Air/insert">
      @csrf
      <div class="row">
        <div class="col-md-6">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Input Ph</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputStatus">Pilih Kolam</label>
                <select id="inputStatus" class="form-control custom-select" name="id_kolam" :value="old('id_kolam')" required autofocus>
                  <option selected disabled>Select one</option>
                  @foreach ($ph_air as $item)
                      <option>{{ $item->id_kolam }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Input Ph Air</label>
                <input type="text" id="inputClientCompany" class="form-control" name="ph" :value="old('ph')" required autofocus >
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Tanggal</label>
                <input type="date" id="inputClientCompany" class="form-control" name="tanggal" :value="old('tanggal')" required autofocus >
              </div>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            <div>
              @if (session('pesan'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil</h5>
                  Data Ph Air Berhasil Disimpan
                </div>
              @endif
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
         
      </form>


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
        @foreach($ph_air1 as $item)
          '{{ $item->tanggal }}',
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
            @foreach($ph_air1 as $item)
              '{{ $item->ph }}',
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



    // ------------
    // Kolam 2
    // -----------

    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
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
        @foreach($ph_air2 as $item)
          '{{ $item->tanggal }}',
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
            @foreach($ph_air2 as $item)
              '{{ $item->ph }}',
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

    // ------------
    // Kolam 3
    // -----------

    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
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
        @foreach($ph_air3 as $item)
          '{{ $item->tanggal }}',
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
            @foreach($ph_air3 as $item)
              '{{ $item->ph }}',
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

    // ------------
    // Kolam 4
    // -----------

    var lineChartCanvas = $('#lineChart4').get(0).getContext('2d')
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
        @foreach($ph_air4 as $item)
          '{{ $item->tanggal }}',
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
            @foreach($ph_air4 as $item)
              '{{ $item->ph }}',
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