<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RickAndMortyApiService;

class HomeController extends Controller
{
    protected $rickAndMortyApiService;

    public function __construct(RickAndMortyApiService $rickAndMortyApiService)
    {
        $this->rickAndMortyApiService = $rickAndMortyApiService;
    }

    public function index()
    {
        $characters = $this->rickAndMortyApiService->getCharacters();
        return view('home', ['characters' => $characters]);
    }
}

