

<?php $__env->startSection('title', 'Daftarkan Pegawai Baru'); ?>

<?php $__env->startSection('content'); ?>
<!-- Main content -->
    <section class="content">
      
    <form method="POST" action="<?php echo e(route('register')); ?>">
      <?php echo csrf_field(); ?>
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Pegawai</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Nama Lengkap</label>
                  <input type="text" id="inputName" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required>

                  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label for="inputDescription">NIK</label>
                  <input  type="text" id="inputDescription" class="form-control <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nik" value="<?php echo e(old('nik')); ?>" required>

                  <?php $__errorArgs = ['nik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">No. Telepon</label>
                  <input type="text" id="inputClientCompany" class="form-control <?php $__errorArgs = ['noHp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="noHp" value="<?php echo e(old('noHp')); ?>" required>

                  <?php $__errorArgs = ['noHp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Alamat</label>
                  <input type="text" id="inputProjectLeader" class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamat" value="<?php echo e(old('alamat')); ?>" required>

                   <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Kontrak Kerja</label>
                  <select name="kontrak" id="inputStatus" class="form-control <?php $__errorArgs = ['kontrak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> custom-select" required>
                    <option selected disabled>Select one</option>
                    <option>1 Tahun</option>
                    <option>2 Tahun</option>
                    <option>3 Tahun</option>
                    <option>4 Tahun</option>
                  </select>

                  <?php $__errorArgs = ['kontrak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
              </div>
              
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Data Pengguna</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <label for="inputName">Email</label>
                  <input type="text" id="inputName" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                   <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                  <label for="inputName">Password</label>
                  <input type="password" id="inputName" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required>

                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group">
                  <label for="inputName">Ulangi Password</label>
                  <input name="password_confirmation" type="password" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                  <label for="inputStatus">Status Pengguna</label>
                  <select name="level" id="inputStatus" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option>Admin</option>
                    <option>User</option>
                  </select>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>    
    
      <div class="row">
        <div class="col-12">
          <a href="/admin" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </div>
    </form>
    </section>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.v_template2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nambak\resources\views/v_AddPegawai.blade.php ENDPATH**/ ?>