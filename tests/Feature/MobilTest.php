<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MobilTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testMobil()
    {
        $response = $this->get('/api/mobil');
        $response->assertStatus(200);
    }
}
