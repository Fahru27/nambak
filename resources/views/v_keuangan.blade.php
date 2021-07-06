@extends('layout.v_template')

@section('title', 'Keuangan')

@section('content')

      <div class="container-fluid">
        <div class="row">
                <div class="col-md-10">
                @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Berhasil</h5>
                        Data Berhasil Disimpan
                    </div>
                @endif
                </div>
        </div>

        <div class="row">
          <div class="col-md-10">
             <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pendapatan/Pengeluaran</h3>

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
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profit</h3>

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
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Masukkan Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="/keuangan/insert">
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label>Total Uang Masuk</label>
                        <input type="text" class="form-control" name="uang_masuk" :value="old('uang_masuk')" required placeholder="IDR">
                    </div>
                    <div class="form-group">
                        <label>Total Uang Keluar</label>
                        <input type="text" class="form-control" name="uang_keluar" :value="old('uang_keluar')" required placeholder="IDR">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">Tanggal</label>
                        <input type="date"  class="form-control" name="tanggal" :value="old('tanggal')" required >
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        </div>
        <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Pengeluaran/Pemasukan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Pemasukan(Rupiah)</th>
                      <th>Pengeluaran(Rupiah)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tabel as $item)
                    <tr>
                      <td>{{ date('d M Y', strtotime($item->tanggal)) }}</td>
                      <td>{{ $item->uang_masuk }}</td>
                      <td>{{ $item->uang_keluar }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = {
      labels  : [
        @foreach($keuangan as $item)
          '{{ $item->tanggal }}',
        @endforeach
      ],
      datasets: [
        {
          label               : 'Pengeluaran',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            @foreach($keuangan as $item)
              '{{ $item->uang_keluar }}',
            @endforeach
        ]
        },
        {
          label               : 'Pemasukan',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [
            @foreach($keuangan as $item)
              '{{ $item->uang_masuk }}',
            @endforeach
          ]
        },
      ]
    }
    var temp0 = barChartData.datasets[0]
    var temp1 = barChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [
        @foreach($keuangan as $item)
          '{{ $item->tanggal }}',
        @endforeach
        ],
      datasets: [
        {
          label               : 'Profit',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : 4,
          pointColor          : '#0010f7',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            @foreach($keuangan as $item)
              '{{ $item->uang_masuk - $item->uang_keluar }}',
           @endforeach
          ]
        },
      ]
    }


    var areaChartOptions = {
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

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })
  })
</script>



@endsection