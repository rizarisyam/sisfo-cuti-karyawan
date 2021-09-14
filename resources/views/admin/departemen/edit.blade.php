@extends('adminlte::page')

@section('title', 'Departemen')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Edit Departemen</h4>
        </div>
    </div>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('departemen.update', $departemen->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="">Nama Departemen</label>
                <input type="text" name="departemen" class="form-control" value="{{ $departemen->departemen }}">
            </div>

            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" class="form-control" cols="30" rows="10">
                {{ $departemen->keterangan }}
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
