<?php

namespace App\Services;

use GuzzleHttp\Client;

class RickAndMortyApiService
{
    protected $baseUrl = 'https://rickandmortyapi.com/api/';

    public function getCharacters()
    {
        $client = new Client();
        $response = $client->get($this->baseUrl . 'character');
        return json_decode($response->getBody()->getContents())->results;
    }

    public function getCharacterById($id)
    {
        $client = new Client();
        $response = $client->get($this->baseUrl . 'character/' . $id);
        return json_decode($response->getBody()->getContents());
    }
}
