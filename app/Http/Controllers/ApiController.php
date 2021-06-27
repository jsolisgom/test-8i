<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        $response = Http::get('https://api.themoviedb.org/3/movie/popular', [
            'api_key' => env('API_KEY_MOVIES'),
            'language' => config('apimovies.language'),
            'page' => 1
        ]);

        $movies = $response->json()['results'];
        return view('api.index', compact('movies'));
    }
}
