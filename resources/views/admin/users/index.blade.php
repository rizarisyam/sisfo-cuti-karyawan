@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Manage Users</h4>
        </div>
        {{-- <div>
            <a href="{{ route('users.create') }}">
                <button type="button" class="btn btn-primary">Tambah</button>
            </a>
        </div> --}}
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
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Aksi</th>


                </tr>
              </thead>
              <tbody>
                @forelse ($users as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->role }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('users.destroy', $row->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary btn-sm" {{(Auth::user()->role == $row->role) ? 'disabled' : ''}}>Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty

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
