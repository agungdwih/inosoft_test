<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Penjualan;
use Illuminate\Support\Facades\DB;

class PenjualanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/penjualan');
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $data = Penjualan::create([
            'id'=> '646b7eeb5d1d0000aa0018c3',
            'jumlah penjualan' => '255',
        ]);

        $this->withoutExceptionHandling();
        $this->json('DELETE', '/api/penjualan/'.$data->id, ['Accept' => 'application/json'])
        ->assertStatus(200);
        Penjualan::where('id','646b7eeb5d1d0000aa0018c3')->delete();
    }


    public function testDelete()
    {
        $data = Penjualan::create([
            'id'=> '646b7eeb5d1d0000aa0018c3',
            'jumlah penjualan' => '255',
        ]);

        $this->withoutExceptionHandling();
        $this->json('DELETE', '/api/penjualan/'.$data->id, ['Accept' => 'application/json'])
        ->assertStatus(200);
        Penjualan::where('id','646b7eeb5d1d0000aa0018c3')->delete();
    }

}
