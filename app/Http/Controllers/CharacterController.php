<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RickAndMortyApiService;

class CharacterController extends Controller
{
    protected $rickAndMortyApiService;

    public function __construct(RickAndMortyApiService $rickAndMortyApiService)
    {
        $this->rickAndMortyApiService = $rickAndMortyApiService;
    }

    public function show($id)
    {
        $character = $this->rickAndMortyApiService->getCharacterById($id);
        return view('characters.show', ['character' => $character]);
    }
}
