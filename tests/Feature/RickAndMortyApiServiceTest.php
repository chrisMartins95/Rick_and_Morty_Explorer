<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\RickAndMortyApiService;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Http;

class RickAndMortyApiServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /** @test */
     public function it_can_fetch_characters_from_api()
     {
         // Simula uma resposta da API
         Http::fake([
             'https://rickandmortyapi.com/api/character' => Http::response(['results' => []], 200)
         ]);
 
         // Cria uma instância do serviço
         $service = new RickAndMortyApiService();
 
         // Chama o método para buscar personagens
         $characters = $service->getCharacters();
 
         // Verifica se a resposta é um array vazio (simulado)
         $this->assertIsArray($characters);
         $this->assertEmpty($characters);
     }
}
