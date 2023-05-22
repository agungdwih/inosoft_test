<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\DB;

class KendaraanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/kendaraan');
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $data = Kendaraan::create([
            'id'=>'646b53d190320000d4005493',
            'tahun_keluaran' => '2021',
            'warna' => 'biru',
            'harga' => '10000',
            'jumlah_stok' => '2'
        ]);
        

        $this->withoutExceptionHandling();
        $this->json('DELETE', '/api/kendaraan/'.$data->id, ['Accept' => 'application/json'])

        ->assertStatus(200);
        Kendaraan::where('id','646b53d190320000d4005493')->delete();
    }


    public function testDelete()
    {
        $data = Kendaraan::create([
            'id'=>'646b53d190320000d4005493',
            'tahun_keluaran' => '2021',
            'warna' => 'biru',
            'harga' => '10000',
            'jumlah_stok' => '2'
        ]);

        $this->withoutExceptionHandling();
        $this->json('DELETE', '/api/kendaraan/'.$data->id, ['Accept' => 'application/json'])
        ->assertStatus(200);
        Kendaraan::where('id','646b53d190320000d4005493')->delete();
    }

}
