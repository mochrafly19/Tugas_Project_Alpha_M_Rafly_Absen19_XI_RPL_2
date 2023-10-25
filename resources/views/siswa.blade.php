@extends('layouts.app')

@section('content')
    <div class="judul2">
        <h1>Daftar Siswa</h1>
        <a href="{{ route('siswacreate') }}" class="btn btn-success">Tambah Siswa</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $siswa)
                <tr>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->jk }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->tgl_lahir }}</td>
                    <td>
                        <a href="{{ route('siswashow', $siswa->id) }}" class="btn btn-success">Lihat</a>
                        <a href="{{ route('siswaedit', $siswa->id) }}" class="btn btn-success">Edit</a>
                        <form method="POST" action="{{ route('siswa.destroy', $siswa->id) }}" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('apakah anda yakin?');" class="btn btn-success">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
