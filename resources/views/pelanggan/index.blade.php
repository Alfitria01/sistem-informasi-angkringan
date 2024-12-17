<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Data Pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Filter Data Pelanggan Berdasarkan Bulan</h1>

        <form method="GET" action="{{ route('pelanggan.filter') }}">
            <div class="mb-3">
                <label for="bulan" class="form-label">Pilih Bulan:</label>
                <input type="month" id="bulan" name="bulan" class="form-control" value="{{ $bulan ?? '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        @if (isset($dataPelanggan))
            <h2 class="mt-5">Hasil untuk Bulan: {{ date('F Y', strtotime($bulan)) }}</h2>

            @if ($dataPelanggan->isEmpty())
                <p class="mt-3">Tidak ada data pelanggan untuk bulan ini.</p>
            @else
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Pelanggan</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPelanggan as $pelanggan)
                            <tr>
                                <td>{{ $pelanggan->tanggal }}</td>
                                <td>{{ $pelanggan->nama_pelanggan }}</td>
                                <td>Rp {{ number_format($pelanggan->total_harga, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
