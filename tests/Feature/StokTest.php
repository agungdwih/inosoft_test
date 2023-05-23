<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Motor;
use App\Models\Mobil;
use Illuminate\Support\Facades\DB;

class StokTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/stok');
        $response->assertStatus(200);
    }

    

}
