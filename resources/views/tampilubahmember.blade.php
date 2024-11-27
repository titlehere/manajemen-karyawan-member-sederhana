<!-- resources/views/tampilubahmember.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
</head>
<body>
    <h2>Edit Member</h2>
    <form action="{{ url('simpanubahmember') }}" method="post">
        @csrf
        <label>Kode Member:</label><br>
        <input type="text" name="kode_member" value="{{ $hasil->kode_member }}" readonly><br><br>

        <label>Nama Member:</label><br>
        <input type="text" name="nama_member" value="{{ $hasil->nama_member }}" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur_member" value="{{ $hasil->umur_member }}" required><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat_member" value="{{ $hasil->alamat_member }}" required><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="telepon_member" value="{{ $hasil->telepon_member }}" required><br><br>

        <label>Tanggal Daftar:</label><br>
        <input type="date" name="tanggal_daftar_member" value="{{ $hasil->tanggal_daftar_member }}" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
        <button type="submit" name="hapus">Hapus</button>
    </form>
</body>
</html>
