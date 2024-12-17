<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK - Sistem Pendukung Keputusan</title>
</head>
<body>
    <h1>Hasil Pengurutan Skor Akhir</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Skor Akhir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sortedScores as $score)
                <tr>
                    <td>{{ $score['nama'] }}</td>
                    <td>{{ $score['skor_akhir'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
