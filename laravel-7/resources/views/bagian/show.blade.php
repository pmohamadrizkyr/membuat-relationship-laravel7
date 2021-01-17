@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h1 class="mr-auto">Info Bagian {{ $bagian->nama_bagian }}</h1>
                    {{-- sudah mempunyai route name bawaan karena memakai resource, php artisan route:list kita bisa lihat
                    kita bisa pake route name atau url, sama aja sebenarnya --}}
                    <a href="{{ url('/bagians/'.$bagian->id.'/edit') }}" class="btn btn-info">
                        Edit
                    </a>
                    @can('create', $bagian)
                        <form action="{{ url('/bagians/'.$bagian->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    @endcan
                   
                </div>
                <hr>
                <button type="submit" class="btn btn-dark"><a href="{{ url('/bagians/') }}">Kembali</a></button>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                     {{ session()->get('pesan') }}
                     </div>
                 @endif
                 <ul>
                     <li>Nama Bagian : {{ $bagian->nama_bagian }}</li>
                     <li>Nama Supervisor : {{ $bagian->nama_supervisor }}</li>
                     <li>Jumlah Bagian : {{ $bagian->jumlah_bagian }}</li>
                 </ul>
            </div>
        </div>
    </div>
    
@endsection