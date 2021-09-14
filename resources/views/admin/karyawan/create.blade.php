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
        <form action="{{ route('karyawan.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" name="nik" >

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" >

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmpt_lahir">

                      </div>
                </div>
            </div>

            {{-- row 2 --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="custom-select" name="jenis_kelamin">
                            <option value="" selected></option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                            <option value="lainnya">Lainnya</option>
                          </select>

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">No. Telp</label>
                        <input type="text" class="form-control" name="telp">

                      </div>
                </div>
            </div>

            {{-- row 3 --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Status Nikah</label>
                        <select class="custom-select" name="status_nikah">
                            <option value="" selected></option>
                            <option value="lajang">Lajang</option>
                            <option value="menikah">Menikah</option>

                          </select>

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Status Karyawan</label>

                        <select class="custom-select" name="status_karyawan">
                            <option value="" selected></option>
                            <option value="permanen">Permanen</option>
                            <option value="kontrak">Kontrak</option>

                          </select>
                      </div>
                </div>
            </div>

            {{-- row 4 --}}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Pendidikan</label>
                        <input type="text" class="form-control" name="pendidikan">

                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Departemen</label>
                        <input type="text" class="form-control" name="departemen">
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
                        <input type="text" class="form-control" name="jabatan">
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
