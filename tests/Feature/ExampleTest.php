<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_string_iguais(): void
    {
        $stringPrimeira = 'Cesar';

        $stringSegunda = 'Progress';

        $this->assertNotEquals($stringPrimeira, $stringSegunda);
    
    }

    public function test_isNull(): void
    {
        $aux = null;
        
        $this->assertNull($aux);
    }

    public function test_isNotEmpty(): void
    {
        $array = [5, 4, 3, 2, 1];

        $this->assertNotEmpty($array);
    }

}
