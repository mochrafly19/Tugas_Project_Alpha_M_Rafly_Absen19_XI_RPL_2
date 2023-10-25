@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Siswa</h1>
    <form method="POST" action="/siswa">
        @csrf
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="nis">NIS:</label>
            <input type="text" name="nis" id="nis" class="form-control" required>
            <span id="nis-error" style="color: red;"></span>
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
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" onclick="return validateNIS();">Create</button>
    </form>
</div>

<script>
    function validateNIS() {
        var nis = document.getElementById('nis').value;
        var nisPattern = /^[0-9]{10}$/; // Contoh pola NIS (10 digit angka)

        if (!nisPattern.test(nis)) {
            document.getElementById('nis-error').textContent = 'NIS Sudah Tersedia atau NIS Kurang/Lebih dari 10 Karakter';
            return false;
        } else {
            document.getElementById('nis-error').textContent = '';
            return true;
        }
    }
</script>
</div>
@endsection
