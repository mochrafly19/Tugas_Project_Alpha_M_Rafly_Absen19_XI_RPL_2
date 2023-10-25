@extends('layouts.app')

@section('content')
<div class="content2">
    <h1>Edit Siswa</h1>
    <form method="POST" action="{{ route('siswa.update', $siswa->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}" readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" readonly>
        </div>
        <br>
        <div class="form-group">
            <label for="jk">Jenis Kelamin:</label>
            <select name="jk" class="form-control" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" class="form-control" required>{{ $siswa->alamat }}</textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}" required>
        </div>
        <br>
        <div id="liveAlertPlaceholder"></div>
        <button type="submit" onclick="return confirm('apakah anda yakin?');" class="btn btn-primary" id="liveAlertBtn">Update</button>
    </form>
    </div>
@endsection
