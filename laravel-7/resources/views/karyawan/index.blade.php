<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <h2>Tabel Data Karyawan</h2>
                    <a href="{{ route('karyawans.create') }}" class="btn btn-primary">Tambah Data Karyawan</a>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                @if (session('hapus'))
                    <div class="alert alert-danger">
                        {{ session('hapus') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Bagian</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- CARA1 --}}
                                {{-- <td><a href="{{ route('karyawans.show', ['karyawan' => $karyawan->id]) }}">{{ $karyawan->nik }}</a></td> --}}
                                {{-- CARA2 --}}
                                <td><a href="{{ url('/karyawans/'.$karyawan->id) }}">{{ $karyawan->nik }}</a></td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</td>
                                <td>{{ $karyawan->bagian }}</td>
                                <td>{{ $karyawan->alamat == '' ? 'N/A' : $karyawan->alamat }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Data kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>