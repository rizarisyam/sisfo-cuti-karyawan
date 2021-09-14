@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Manage Karyawan</h4>
        </div>
        <div>
            <a href="{{ route('karyawan.create') }}">
                <button type="button" class="btn btn-primary">Tambah</button>
            </a>
        </div>
    </div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">


        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">NIK</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat Lahir</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">No.Tlpn</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Status Nikah</th>
                  <th scope="col">Status Karyawan</th>
                  <th scope="col">Pendidikan</th>
                  <th scope="col">Departemen</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                  @forelse ($karyawan as $row)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->nik }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->tmpt_lahir }}</td>
                    <td>{{ $row->tgl_lahir }}</td>
                    <td>{{ $row->jenis_kelamin }}</td>
                    <td>{{ $row->telp }}</td>
                    <td>{{ $row->alamat }}</td>
                    <td>{{ $row->status_nikah }}</td>
                    <td>{{ $row->status_karyawan }}</td>
                    <td>{{ $row->pendidikan }}</td>
                    <td>{{ $row->departemen }}</td>
                    <td>{{ $row->jabatan }}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('karyawan.edit', $row->id) }}">
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            <form action="{{ route('karyawan.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                  @empty
                    <tr>
                        <td colspan="13" class="text-center">
                            Data tidak ditemukan...
                        </td>
                    </tr>
                  @endforelse

              </tbody>
        </table>
    </div>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
