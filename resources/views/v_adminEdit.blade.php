@extends('layout.v_template')

@section('title', 'Daftarkan Pegawai Baru')

@section('content')
<!-- Main content -->
    <section class="content">
      
    <form method="POST" action="/admin/update/{{ $users->id }}">
      @csrf
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
                  <input type="text" id="inputName" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users->name }}" required>

                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="inputDescription">NIK</label>
                  <input  type="text" id="inputDescription" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $users->nik }}" required>

                  @error('nik')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="inputClientCompany">No. Telepon</label>
                  <input type="text" id="inputClientCompany" class="form-control @error('noHp') is-invalid @enderror" name="noHp" value="{{ $users->noHp }}" required>

                  @error('noHp')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="inputProjectLeader">Alamat</label>
                  <input type="text" id="inputProjectLeader" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $users->alamat }}" required>

                   @error('alamat')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Kontrak Kerja</label>
                  <select name="kontrak" class="form-control custom-select" required>
                    <option selected hidden>{{ $users->kontrak }}</option>
                    <option>1 Tahun</option>
                    <option>2 Tahun</option>
                    <option>3 Tahun</option>
                    <option>4 Tahun</option>
                  </select>

                  @error('kontrak')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
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
                  <input type="text" id="inputName" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required>

                   @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label for="inputStatus">Status Pengguna</label>
                  <select name="level" class="form-control custom-select">
                    <option selected hidden>{{ $users->level }}</option>
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
          <a href="#" class="btn btn-secondary">Cancel</a>
          <button type="submit">ok</button>
        </div>
      </div>
    </form>
    </section>

  @endsection