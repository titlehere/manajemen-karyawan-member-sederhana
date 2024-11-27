<!-- resources/views/tambah_member.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>
</head>
<body>
    <h2>Tambah Member</h2>
    <form action="{{ url('simpanmember') }}" method="post">
        @csrf
        <label>Kode Member:</label><br>
        <input type="text" name="kode_member" maxlength="10" required><br><br>

        <label>Nama Member:</label><br>
        <input type="text" name="nama_member" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur_member" required><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat_member" required><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="telepon_member" required><br><br>

        <label>Tanggal Daftar:</label><br>
        <input type="date" name="tanggal_daftar_member" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
