<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan</title>
</head>
<body>
    <h2>Daftar Karyawan</h2>
    <a href="{{ url('tambahkaryawan') }}"><button>Tambah Karyawan</button></a>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji Pokok</th>
            <th>Lembur</th>
            <th>Total Gaji</th>
            <th>Aksi</th>
        </tr>
        @foreach($karyawan as $data)
        <tr>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jabatan }}</td>
            <td>{{ $data->gajipokok }}</td>
            <td>{{ $data->lembur }}</td>
            <td>{{ $data->gajipokok + $data->lembur }}</td>
            <td>
                <a href="{{ url('ubahkaryawan/' . $data->nama) }}"><button>Edit</button></a>
                <form action="{{ url('simpanhapuskaryawan') }}" method="post" style="display:inline;">
                    @csrf
                    <input type="hidden" name="nama" value="{{ $data->nama }}">
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2"><strong>Total</strong></td>
            <td><strong>{{ $totalGajiPokok }}</strong></td>
            <td><strong>{{ $totalLembur }}</strong></td>
            <td colspan="2"></td>
        </tr>
    </table>
</body>
</html>