<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
</head>
<body>
    <h2>Edit Karyawan</h2>
    <form action="{{ url('simpanubahkaryawan') }}" method="post">
        @csrf
        <input type="hidden" name="nama" value="{{ $karyawan->nama }}">

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $karyawan->nama }}" readonly><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" required><br><br>

        <label>Gaji Pokok:</label><br>
        <input type="number" name="gajipokok" value="{{ $karyawan->gajipokok }}" required><br><br>

        <label>Lembur:</label><br>
        <input type="number" name="lembur" value="{{ $karyawan->lembur }}" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>