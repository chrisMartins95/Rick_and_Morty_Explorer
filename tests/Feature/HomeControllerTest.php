<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\RickAndMortyApiService;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   
     /** @test */
    public function it_can_display_home_page_with_characters()
    {
        // Simula uma resposta da API com personagens
        $apiService = $this->mock(RickAndMortyApiService::class);
        $apiService->shouldReceive('getCharactersById')
                   ->once()
                   ->andReturn([
                       (object) ['id' => 1],
                       (object) ['id' => 2],
                   ]);

        // Faz uma requisição GET para a página inicial
        $response = $this->get('/');

        // Verifica se a página foi carregada corretamente e exibe os personagens
        $response->assertStatus(200);
        $response->assertSee('1');
        $response->assertSee('2');
    }

}
