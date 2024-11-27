<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h2>Tambah Karyawan</h2>
    <form action="{{ url('simpankaryawan') }}" method="post">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" required><br><br>

        <label>Gaji Pokok:</label><br>
        <input type="number" name="gajipokok" required><br><br>

        <label>Lembur:</label><br>
        <input type="number" name="lembur" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>