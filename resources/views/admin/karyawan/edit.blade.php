@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Tambah Data Karyawan</h4>
        </div>
    </div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('karyawan.update', $k->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" name="nik" value="{{ $k->nik }}" >

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="{{ $k->nama }}">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmpt_lahir" value="{{ $k->tmpt_lahir }}">

                      </div>
                </div>
            </div>

            {{-- row 2 --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="{{ $k->tgl_lahir }}">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="custom-select" name="jenis_kelamin">
                            {{-- <option value="" selected></option> --}}
                            <option value="laki-laki" {{($k->jenis_kelamin == 'laki-laki') ? 'selected' : ''}}>Laki-laki</option>
                            <option value="perempuan" {{($k->jenis_kelamin == 'perempuan') ? 'selected' : ''}}>Perempuan</option>
                            <option value="lainnya" {{($k->jenis_kelamin == 'lainnya') ? 'selected' : ''}}>Lainnya</option>
                          </select>

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">No. Telp</label>
                        <input type="text" class="form-control" name="telp" value="{{ $k->telp }}">

                      </div>
                </div>
            </div>

            {{-- row 3 --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $k->alamat }}">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Status Nikah</label>
                        <select class="custom-select" name="status_nikah">
                            {{-- <option value="" selected></option> --}}
                            <option value="lajang" {{($k->status_nikah == 'lajang') ? 'selected' : ''}}>Lajang</option>
                            <option value="menikah" {{($k->status_nikah == 'menikah') ? 'selected' : ''}}>Menikah</option>

                          </select>

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Status Karyawan</label>

                        <select class="custom-select" name="status_karyawan">
                            {{-- <option value="" selected></option> --}}
                            <option value="permanen" {{($k->status_karyawan == 'permanen') ? 'selected' : ''}}>Permanen</option>
                            <option value="kontrak" {{($k->status_karyawan == 'kontrak') ? 'selected' : ''}}>Kontrak</option>

                          </select>
                      </div>
                </div>
            </div>

            {{-- row 4 --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan" value="{{ $k->pendidikan }}">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Departemen</label>
                        <input type="text" class="form-control" name="departemen" value="{{ $k->departemen }}">
                        {{-- <select class="custom-select" name="status_nikah">
                            <option value="" selected></option>
                            <option value="lajang">Lajang</option>
                            <option value="menikah">Menikah</option>

                          </select> --}}

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" value="{{ $k->jabatan }}">
                        {{-- <select class="custom-select" name="status_karyawan">
                            <option value="" selected></option>
                            <option value="permanen">Permanen</option>
                            <option value="kontrak">Kontrak</option>

                          </select> --}}
                      </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
