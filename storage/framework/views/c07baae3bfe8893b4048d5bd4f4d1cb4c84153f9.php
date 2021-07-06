

<?php $__env->startSection('title', 'ikan'); ?>

<?php $__env->startSection('content'); ?>


<div class="container-fluid">
        <div class="col-md-10">
          
        </div>
        <div class="row">
          <div class="col-md-10">
            <!-- AREA CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Total Ikan Keseluruhan</h3>

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
          <div class="col-md-5">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukkan Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/aktivitas/insert">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label>Pilih Ikan</label>
                    <select class="form-control custom-select" name="id_ikan" :value="old('id_ikan')" required>
                      <option selected disabled>Select one</option>
                      
                          <option value=""></option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Banyak Ikan Masuk</label>
                    <input type="text" class="form-control" name="aktivitas_masuk" :value="old('aktivitas_masuk')" required placeholder="dalam ton">
                  </div>
                  <div class="form-group">
                    <label>Banyak Ikan Keluar</label>
                    <input type="text" class="form-control" name="aktivitas_keluar" :value="old('aktivitas_keluar')" required placeholder="dalam ton">
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
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Dalam Tabel</h3>

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
                      <th>Jenis Ikan</th>
                      <th>Ikan Masuk(ton)</th>
                      <th>Ikan Terjual(ton)</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
       
</div>


<!-- jQuery -->
<script src="<?php echo e(asset('template')); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('template')); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('template')); ?>/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('template')); ?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('template')); ?>/dist/js/demo.js"></script>



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
              '<?php echo e($item->total_ikan + 100); ?>',
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
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_ikan.blade.php ENDPATH**/ ?>