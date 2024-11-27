<!-- resources/views/tampil_member.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Member</title>
</head>
<body>
    <h2>Daftar Member</h2>
    <a href="{{ url('tambahmember') }}"><button>Tambah Member</button></a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Kode Member</th>
            <th>Nama Member</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Tanggal Daftar</th>
            <th>Aksi</th>
        </tr>
        @foreach($hasil as $member)
        <tr>
            <td>{{ $member->kode_member }}</td>
            <td>{{ $member->nama_member }}</td>
            <td>{{ $member->umur_member }}</td>
            <td>{{ $member->alamat_member }}</td>
            <td>{{ $member->telepon_member }}</td>
            <td>{{ $member->tanggal_daftar_member }}</td>
            <td>
                <a href="{{ url('ubahmember/' . $member->kode_member) }}"><button>Edit</button></a>
                <form action="{{ url('simpanhapusmember') }}" method="post" style="display:inline;">
                    @csrf
                    <input type="hidden" name="kode_member" value="{{ $member->kode_member }}">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
