<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class Movie
{
    public static function getPopularMovies()
    {
        // Optional caching for performance
        return Cache::remember('popular_movies', 3600, function () {
            $client = new Client();
            try {
                $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/popular?language=en-US', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . env('TMDB_API_TOKEN'),
                        'accept' => 'application/json',
                    ],
                ]);
                return json_decode($response->getBody(), true)['results'];
            } catch (\Exception $e) {
                // Handle errors as needed, such as logging the error
                return [];
            }
        });
    }
}
