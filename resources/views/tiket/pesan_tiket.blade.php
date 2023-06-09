<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Pelanggan</title>
</head>
<body>
    <h1>Halo, {{ $user->username }}</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
    <br>
    <h2>Jadwal Kereta</h2>
    <table border="2" cellpadding="4">
        <tr>
            <th>No.</th>
            <th>Nomor Kereta</th>
            <th>Kereta</th>
            <th>Rute</th>
            <th>Asal</th>
            <th>Tujuan</th>
            <th>Waktu Keberangkatan</th>
            <th>Tarif</th>
            <th>Kapasitas</th>
            <th>Aksi</th>
        </tr>

        <?php
            $i = 1;
        ?>
        @foreach ($jadwal_kereta as $jadwal)
            
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $jadwal->nomor_kereta }}</td>
                <td>{{ $jadwal->nama_kereta }}</td>
                <td>{{ $jadwal->rute }}</td>
                <td>{{ $jadwal->asal }}</td>
                <td>{{ $jadwal->tujuan }}</td>
                <td>{{ $jadwal->waktu_keberangkatan }}</td>
                <td>{{ $jadwal->tarif }}</td>
                <td>{{ $jadwal->kapasitas }}</td>
                <td><a href="/pesan-tiket/{{ $jadwal->id }}">Pesan</a></td>
            </tr>
        <?php
            $i += 1;
        ?>
        @endforeach
        
        
    </table>
    <br><br>
    <a href="/">Kembali ke Dashboard</a>
</body>
</html>