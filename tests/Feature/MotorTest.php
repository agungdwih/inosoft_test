<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Motor;
use Illuminate\Support\Facades\DB;

class MotorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/api/motor');
        $response->assertStatus(200);
    }

    public function testStore()
    {
        $data = Motor::create([
            "id"=> "646b7eeb5d1d0000aa0018c2",
            "mesin_motor"=> "toyota",
            "suspensi"=> "super",
            "transmisi"=> "manual",
            "stok"=> "10"
        ]); 
        $this->withoutExceptionHandling();
        $this->json('POST', '/api/motor', $data->toArray(), ['Accept' => 'application/json'])
            ->assertStatus(201);
            // ->assertRedirect(route('stokbarang.index'));
            // Motor::where('id','646b7eeb5d1d0000aa0018c2')->delete();
    }

    public function testDelete()
    {
        // $data2 = Motor::create([
        //     "id"=> "646b7eeb5d1d0000aa0018c3",
        //     "mesin_motor"=> "toyota",
        //     "suspensi"=> "super",
        //     "transmisi"=> "manual",
        //     "stok"=> "10"
        // ]);
        $data2 = Motor::where('id','646b7eeb5d1d0000aa0018c2');
        // $test = DB::table('mesin_motor')->order_by('created_at', 'desc')->first();
        // dd($test);

        $this->withoutExceptionHandling();
        $this->json('DELETE', '/api/motor/'.$data2->id, ['Accept' => 'application/json'])
        ->delete()
        ->assertStatus(200);
        // Motor::where('id','646b7eeb5d1d0000aa0018c2')->delete();
    }

}
