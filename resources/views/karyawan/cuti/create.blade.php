@extends('adminlte::page')

@section('title', 'Sisfo Cuti Karyawan')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Pengajuan Cuti</h4>
        </div>
    </div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('cuti.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mulai Cuti</label>
                        <input type="date" name="mulai_cuti" class="form-control">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Akhir Cuti</label>
                        <input type="date" name="akhir_cuti" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Jenis Cuti</label>
                        <select name="jenis_cuti" id="" class="form-control">
                            <option value="" selected></option>
                            <option value="cuti tahunan">Cuti Tahunan</option>
                            <option value="cuti sakit">Cuti Sakit</option>
                            <option value="cuti bersalin/melahirkan">Cuti Bersalin/Melahirkan</option>
                            <option value="cuti besar">Cuti Besar</option>
                            <option value="cuti karena alasan penting">Cuti karena alasan penting</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Jumlah Cuti</label>
                        <input type="text" name="jumlah_cuti" class="form-control">
                    </div>
                </div>


            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi odit rerum officia beatae adipisci ipsum illo nulla repudiandae eaque veniam nostrum fuga nisi tenetur voluptas iure, optio excepturi praesentium facere?
                </textarea>
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
