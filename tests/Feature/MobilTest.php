<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Mobil;
use Illuminate\Support\Facades\DB;

class MobilTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/mobil');
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $data = Mobil::create([
            'id'=>'646b7eeb5d1d0000aa0018c2',
            'mesin_mobil' => 'honda',
            'kapasitas' => 'besar',
            'tipe' => 'keluarga',
            'stok' => '1'
        ]);
        $this->withoutExceptionHandling();
        $this->json('POST', '/api/mobil', $data->toArray(), ['Accept' => 'application/json'])
            ->assertStatus(201);
            // ->assertRedirect(route('stokbarang.index'));
            Mobil::where('id','646b7eeb5d1d0000aa0018c2')->delete();
    }


    public function testDelete()
    {
        $data = Mobil::create([
            'id'=>'646b53d190320000d4005493',
            'mesin_mobil' => 'wuling',
            'kapasitas' => 'besar',
            'tipe' => 'keluarga',
            'stok' => '1'
        ]);
        // $data2 = Motor::where('id','646b7eeb5d1d0000aa0018c2');
        // $test = DB::table('mesin_motor')->order_by('created_at', 'desc')->first();
        // dd($test);

        $this->withoutExceptionHandling();
        $this->json('DELETE', '/api/mobil/'.$data->id, ['Accept' => 'application/json'])
        // ->delete()
        ->assertStatus(200);
        Mobil::where('id','646b53d190320000d4005493')->delete();
    }

}
