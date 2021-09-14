@extends('adminlte::page')

@section('title', 'Pengajuan Cuti')

@section('content_header')
    <div class="d-flex justify-content-between">
        <div>
            <h4>Pengajuan Cuti</h4>
        </div>
        {{-- <div>
            <a href="{{ route('cuti.create') }}">
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
                  <th scope="col">Jenis Cuti</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Tgl Awal</th>
                  <th scope="col">Tgl akhir</th>
                  <th scope="col">Jumlah Cuti</th>
                  <th scope="col">Sisa Cuti</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($cuti as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $row->jenis_cuti }}</td>
                        <td>{{ $row->keterangan }}</td>
                        <td>{{ $row->mulai_cuti}}</td>
                        <td>{{ $row->akhir_cuti }}</td>
                        <td>{{ $row->jumlah_cuti }}</td>
                        <td>{{ $row->sisa_cuti }}</td>
                        <td>{{ $row->status }}</td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('cuti.edit', $row->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                </a>
                                <form action="{{ route('cuti.destroy', $row->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary btn-sm">Delete</button>
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
