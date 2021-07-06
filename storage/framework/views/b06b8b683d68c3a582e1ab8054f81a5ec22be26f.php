

<?php $__env->startSection('title', 'Ph Air'); ?>

<?php $__env->startSection('content'); ?>

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
      <?php echo csrf_field(); ?>
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
                  <?php $__currentLoopData = $ph_air; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option><?php echo e($item->id_kolam); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
              <?php if(session('pesan')): ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Berhasil</h5>
                  Data Ph Air Berhasil Disimpan
                </div>
              <?php endif; ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Ph Air</h3>

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
                      <th>kolam</th>
                      <th>Kadar Ph Air</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $ph; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e(date('d M Y', strtotime($item->tanggal))); ?></td>
                      <?php if($item->id_kolam == 1): ?>
                            <td>Kolam Ikan Emas</td>
                          <?php elseif($item->id_kolam == 2): ?>
                            <td>Kolam Ikan Nila</td>
                          <?php elseif($item->id_kolam == 3): ?>
                            <td>Kolam Ikan Lele</td>
                          <?php elseif($item->id_kolam == 4): ?>
                            <td>Kolam Ikan Mujair</td>
                        <?php endif; ?>
                      <td><?php echo e($item->ph); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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
        <?php $__currentLoopData = $ph_air1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          '<?php echo e($item->tanggal); ?>',
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $ph_air1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->ph); ?>',
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
        <?php $__currentLoopData = $ph_air2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          '<?php echo e($item->tanggal); ?>',
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $ph_air2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->ph); ?>',
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
        <?php $__currentLoopData = $ph_air3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          '<?php echo e($item->tanggal); ?>',
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $ph_air3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->ph); ?>',
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
        <?php $__currentLoopData = $ph_air4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          '<?php echo e($item->tanggal); ?>',
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            <?php $__currentLoopData = $ph_air4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              '<?php echo e($item->ph); ?>',
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
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_AddPh.blade.php ENDPATH**/ ?>