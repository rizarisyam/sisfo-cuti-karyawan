@extends('adminlte::page')

@section('title', 'Manage Departemen')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Manage Departemen</h4>
        </div>
        <div>
            <a href="{{ route('departemen.create') }}">
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
                  <th scope="col">Departemen</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($departemen as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->departemen }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('departemen.edit', $row->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                </a>
                                <form action="{{ route('departemen.destroy', $row->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">
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
