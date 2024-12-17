<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Movies</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        /* Movies Section */
        #movies {
            padding: 80px 0;
            background-color: #f9f9f9; /* Light background */
        }

        #movies h2 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            color: #3e2723; /* Dark brown */
        }

        .movies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsive grid */
            gap: 20px; /* Space between items */
            justify-items: center; /* Center items in their grid cells */
            padding: 0 15px; /* Padding on the sides */
        }

        .movies-card {
            background-color: #ffffff; /* White */
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            max-width: 300px;
            margin: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .movies-card:hover {
            transform: translateY(-5px);
        }

        .movies-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #4CAF50; /* Green */
        }

        .movies-card p {
            color: #666;
            font-size: 1rem;
            margin-top: 10px;
            text-align: left;
        }

        .movies-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .movies-card .card-footer {
            font-size: 0.9rem;
            color: #888;
        }
    </style>
</head>
<body>
    <section id="movies" class="my-5">
        <div class="container">
            <h2>Popular Movies</h2>
            <div class="movies-grid">
                @foreach ($movies as $movie)
                    <div class="movies-card">
                        @if ($movie['poster_path'])
                            <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
                        @endif
                        <h3>{{ $movie['title'] }}</h3>
                        <p>{{ Str::limit($movie['overview'], 200, '...') }}</p>
                        <div class="card-footer">
                            Rating: {{ $movie['vote_average'] }} | Release Date: {{ $movie['release_date'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="text-center mt-4">
        <p>&copy; 2024 Angkringan Putra Pandawa. All rights reserved.</p>
    </footer>
</body>
</html>
