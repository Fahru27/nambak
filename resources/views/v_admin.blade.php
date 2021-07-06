@extends('layout.v_template2')

@section('title', 'Admin')

@section('content')


    </section>
          @if ($message = Session::get('Sukses'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-check"></i> Berhasil</h5>
              {{ $message }}
            </div>
           @endif
           @if (session('pesan'))
              <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                  {{ session('pesan') }}
              </div>
          @endif

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
                    @foreach ($users as $item)
                    <tr>
                      <td>{{ '220'.$item->id }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->nik }}</td>
                      <td>{{ $item->noHp }}</td>
                      <td>{{ $item->alamat }}</td>
                      <td>{{ $item->kontrak }}</td>
                      <td>{{ $item->level }}</td>
                      <td>
                        <a class="btn btn-info" href="/admin/edit/{{ $item->id }}" role="button">Edit</a>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $item->id }}">
                          Hapus
                        </button>
                      </td>
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
        <div class="col-md-2">
              <div>
                <a href="/register" class="btn btn-success stretched-link" style="margin-left: 50px; padding: 15px;">
                    Tambahkan Pegawai
                </a>
            </div>
        </div>

@foreach ($users as $item)
      <div class="modal fade" id="delete{{ $item->id }}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $item->name }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Anda yakin ingin menghapus user ini?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="/admin/delete/{{ $item->id }}" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    
@endforeach


@endsection