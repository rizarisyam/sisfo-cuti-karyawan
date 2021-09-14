@extends('adminlte::page')

@section('title', 'Departemen')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Tambah Data Departemen</h4>
        </div>
    </div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('departemen.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Nama Departemen</label>
                <input type="text" name="departemen" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" class="form-control" cols="30" rows="10">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ducimus consectetur tenetur, laborum voluptatum ab dolorem accusamus esse similique sint fugiat id neque beatae, excepturi necessitatibus nobis quae commodi modi!
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
