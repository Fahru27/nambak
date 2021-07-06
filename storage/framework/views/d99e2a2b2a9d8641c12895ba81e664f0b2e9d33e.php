

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>


<!-- Daftar Kolam -->
        <div class="row">
          <div class="col">
              <table class="table">
                    <tbody>
                        <tr>
                            <?php $__currentLoopData = $ikan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h4>Kolam <?php echo e($item->id_kolam); ?></h4>

                                                <p><?php echo e($item->jenis); ?></p>
                                            </div>
                                            <div class="icon">
                                                <i class="fas fa-chart-bar"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">
                                                More info <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </td>                                   
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </tbody>
                </table>
            <!-- small card -->
          <!-- ./col -->
          <!-- ./col -->
        </div>
        <!-- /.row -->



      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
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

        <div class="col-md-6">
            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Ikan (Dalam satuan ton)</h3>

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
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
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
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Stok Ikan(dalam satuan ton)</h3>

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
        <?php $__currentLoopData = $keuangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          '<?php echo e($item->tanggal); ?>',
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $keuangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->uang_keluar); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $keuangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->uang_masuk); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

     //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          <?php $__currentLoopData = $ikan2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->jenis); ?>',
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      ],
      datasets: [
        {
          data: [
            <?php $__currentLoopData = $ikan2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              "<?php echo e($item->total_ikan); ?>",
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          ],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [
        <?php $__currentLoopData = $keuangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          '<?php echo e($item->tanggal); ?>',
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $keuangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->uang_masuk - $item->uang_keluar); ?>',
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $totalIkan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->tanggal); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        ],
      datasets: [
        {
          label               : 'Total Ikan',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : 3,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
            <?php $__currentLoopData = $totalIkan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->total_ikan); ?>',
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_Dashboard.blade.php ENDPATH**/ ?>