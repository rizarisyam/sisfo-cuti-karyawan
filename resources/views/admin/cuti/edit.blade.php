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
        <form action="{{ route('cuti.update', $cuti->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mulai Cuti</label>
                        <input type="date" name="mulai_cuti" class="form-control" value="{{ $cuti->mulai_cuti }}">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Akhir Cuti</label>
                        <input type="date" name="akhir_cuti" class="form-control" value="{{ $cuti->akhir_cuti }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Jenis Cuti</label>
                        <select name="jenis_cuti" id="" class="form-control">
                            <option value="" selected></option>
                            <option value="cuti tahunan" {{($cuti->jenis_cuti == 'cuti tahunan') ? 'selected' : ''}}>Cuti Tahunan</option>
                            <option value="cuti sakit" {{($cuti->jenis_cuti == 'cuti sakit') ? 'selected' : ''}}>Cuti Sakit</option>
                            <option value="cuti bersalin/melahirkan" {{($cuti->jenis_cuti == 'cuti bersalin/melahirkan') ? 'selected' : ''}}>Cuti Bersalin/Melahirkan</option>
                            <option value="cuti besar" {{($cuti->jenis_cuti == 'cuti besar') ? 'selected' : ''}}>Cuti Besar</option>
                            <option value="cuti karena alasan penting" {{($cuti->jenis_cuti == 'karena alasan penting') ? 'selected' : ''}}>Cuti karena alasan penting</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Jumlah Cuti</label>
                        <input type="text" name="jumlah_cuti" class="form-control" value="{{ $cuti->jumlah_cuti }}">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="">Sisa Cuti</label>
                        <input type="text" name="sisa_cuti" class="form-control" value="{{ $cuti->sisa_cuti }}">
                    </div>
                </div>


            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="" cols="30" rows="10" class="form-control">
                    {{$cuti->keterangan}}
                </textarea>
            </div>

            <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="pending" selected>Pending</option>
                    <option value="rejected" >Rejected</option>
                    <option value="approved" >Approved</option>
                </select>
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
