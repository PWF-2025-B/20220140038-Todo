<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvirontmentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testEnv(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
