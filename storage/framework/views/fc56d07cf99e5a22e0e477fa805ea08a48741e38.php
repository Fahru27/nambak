

<?php $__env->startSection('title', 'Admin'); ?>

<?php $__env->startSection('content'); ?>


    </section>
          <?php if($message = Session::get('Sukses')): ?>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Berhasil</h5>
              <?php echo e($message); ?>

            </div>
           <?php endif; ?>
           <?php if(session('pesan')): ?>
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                  <?php echo e(session('pesan')); ?>

              </div>
          <?php endif; ?>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pegawai</h3>

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
                      <th>ID</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>NoHP</th>
                      <th>Alamat</th>
                      <th>Kontrak</th>
                      <th>Level Pengguna</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e('220'.$item->id); ?></td>
                      <td><?php echo e($item->name); ?></td>
                      <td><?php echo e($item->nik); ?></td>
                      <td><?php echo e($item->noHp); ?></td>
                      <td><?php echo e($item->alamat); ?></td>
                      <td><?php echo e($item->kontrak); ?></td>
                      <td><?php echo e($item->level); ?></td>
                      <td>
                        <a class="btn btn-info" href="/admin/edit/<?php echo e($item->id); ?>" role="button">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo e($item->id); ?>">
                          Hapus
                        </button>
                      </td>
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
        <div class="col-md-2">
              <div>
                <a href="/register" class="btn btn-success stretched-link" style="margin-left: 50px; padding: 15px;">
                    Tambahkan Pegawai
                </a>
            </div>
        </div>

<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="modal fade" id="delete<?php echo e($item->id); ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title"><?php echo e($item->name); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Anda yakin ingin menghapus user ini?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="/admin/delete/<?php echo e($item->id); ?>" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_Admin.blade.php ENDPATH**/ ?>