<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK Results</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">SPK Results (SAW)</h1>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Alternative</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $index => $result)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $result['alternative'] }}</td>
                    <td>{{ $result['score'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
