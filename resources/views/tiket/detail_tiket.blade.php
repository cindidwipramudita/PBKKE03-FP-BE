{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Tiket</title>
</head>
<body>
    <h1>Detail Tiket</h1>

    <table cellpadding="3">
        <tr>
            <td>Nomor Kereta</td>
            <td>{{ $jadwal_kereta_by_id->nomor_kereta }}</td>
        </tr>
        <tr>
            <td>Nama Kereta</td>
            <td>{{ $jadwal_kereta_by_id->nama_kereta }}</td>
        </tr>
        <tr>
            <td>Rute</td>
            <td>{{ $jadwal_kereta_by_id->rute }}</td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>{{ $jadwal_kereta_by_id->asal }}</td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>{{ $jadwal_kereta_by_id->tujuan }}</td>
        </tr>
        <tr>
            <td>Waktu Keberangkatan&nbsp&nbsp&nbsp</td>
            <td>{{ $jadwal_kereta_by_id->waktu_keberangkatan }}</td>
        </tr>
        <tr>
            <td>Tarif</td>
            <td>{{ $jadwal_kereta_by_id->tarif }}</td>
        </tr>
        <tr>
            <td>Kapasitas</td>
            <td>{{ $jadwal_kereta_by_id->kapasitas }}</td>
        </tr>
    </table>

    <br><br>
    <form action='/pesan-tiket/{{ $jadwal->id }}' method="POST">
        <button type="submit">Pesan Tiket</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Tiket</title>
</head>
<body>
    <h1>Detail Tiket</h1>

    <table cellpadding="3">
        <tr>
            <td>Nomor Kereta</td>
            <td>{{ $jadwal_kereta_by_id->nomor_kereta }}</td>
        </tr>
        <tr>
            <td>Nama Kereta</td>
            <td>{{ $jadwal_kereta_by_id->nama_kereta }}</td>
        </tr>
        <tr>
            <td>Rute</td>
            <td>{{ $jadwal_kereta_by_id->rute }}</td>
        </tr>
        <tr>
            <td>Asal</td>
            <td>{{ $jadwal_kereta_by_id->asal }}</td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>{{ $jadwal_kereta_by_id->tujuan }}</td>
        </tr>
        <tr>
            <td>Waktu Keberangkatan&nbsp&nbsp&nbsp</td>
            <td>{{ $jadwal_kereta_by_id->waktu_keberangkatan }}</td>
        </tr>
        <tr>
            <td>Tarif</td>
            <td>{{ $jadwal_kereta_by_id->tarif }}</td>
        </tr>
        <tr>
            <td>Kapasitas</td>
            <td>{{ $jadwal_kereta_by_id->kapasitas }}</td>
        </tr>
    </table>

    <br><br>
    <form method="POST">
        <button type="submit">Pesan Tiket</button>
    </form>
</body>
</html>