      
      
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php if(auth()->user()->level == 'Admin'): ?>
              <li class="nav-item">
                <a href="/dashboard" class="nav-link <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin" class="nav-link <?php echo e(request()->is('admin') ? 'active' : ''); ?>">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Admin
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Input Data
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/keuangan" class="nav-link <?php echo e(request()->is('keuangan') ? 'active' : ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pendapatan/Pengeluaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/aktivitas" class="nav-link <?php echo e(request()->is('aktivitas') ? 'active' : ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Aktivitas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/Ph_Air" class="nav-link <?php echo e(request()->is('Ph_Air') ? 'active' : ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ph Air</p>
                    </a>
                  </li>
                </ul>
              </li>
          <?php elseif(auth()->user()->level == 'User'): ?>
              <li class="nav-item">
                <a href="/dashboard" class="nav-link <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Input Data
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/keuangan" class="nav-link <?php echo e(request()->is('keuangan') ? 'active' : ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pendapatan/Pengeluaran</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/aktivitas" class="nav-link <?php echo e(request()->is('aktivitas') ? 'active' : ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Aktivitas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/Ph_Air" class="nav-link <?php echo e(request()->is('Ph_Air') ? 'active' : ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ph Air</p>
                    </a>
                  </li>
                </ul>
              </li>
            <?php endif; ?>
          
        </ul>
      </nav><?php /**PATH C:\xampp\htdocs\nambak\resources\views/layout/v_nav.blade.php ENDPATH**/ ?>