

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
                <h3 class="card-title">Ikan</h3>

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
        <div class="col">
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


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_dashboard.blade.php ENDPATH**/ ?>