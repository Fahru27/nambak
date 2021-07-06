

<?php $__env->startSection('title', 'Kolam'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
            <div class="col-md-6">
                <!-- AREA CHART -->
                <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Kolam <?php echo e($kolam1->jenis); ?></h3>

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
            <?php $__currentLoopData = $kolam1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            '<?php echo e($item->jumlah_awal); ?>',
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
                <?php $__currentLoopData = $kolam1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                '<?php echo e($item->jumlah_awal); ?>',
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
<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_detailKolam.blade.php ENDPATH**/ ?>