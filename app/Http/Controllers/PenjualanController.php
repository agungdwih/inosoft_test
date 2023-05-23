<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Penjualan::all();
        return response()->json([
            "status" => "success",
            "data" => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(request()->all(), [
            'tipe_kendaraan' => 'required',
            'id_jual' => 'required',
            'qty' => 'required',
            
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => "failed",
                "message" => $validator->messages()->first()
            ], 400);
        }

        if($request['tipe_kendaraan']== 'mobil' ){
            $mobil = Mobil::find($request['id_jual']);
            $mobil->update([
                "stok"=>$mobil['stok']-$request['qty']
            ]);
        }
        if($request['tipe_kendaraan']== 'motor' ){
            $mobil = Motor::find($request['id_jual']);
            $mobil->update([
                "stok"=>$mobil['stok']-$request['qty']
            ]);
        }
        $data = Penjualan::create($request->all());
        if ($data) {
            return response()->json([
                "status" => "success",
                "message" => "data successfully enterred to db",
                "data" => $data
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Penjualan::find($id);
        if (!$data) {
            return response()->json([
                "status" => "failed",
                "message" => "data not found"
            ], 404);
        }
        $motor = Motor::find($data->id_jual);
        if($motor){
            $data->mesin = $motor->mesin_motor;
            $data->suspensi = $motor->suspensi;
            $data->transmisi = $motor->transmisi;
            $data->jumlah_stok = $motor->stok;

            return response()->json([
                "status" => "success",
                "data" => $data
            ], 200);
        }
        
        // $data->mesin = $motor->mesin_motor;
        // $data->suspensi = $motor->suspensi;
        // $data->transmisi = $motor->transmisi;
        // $data->jumlah_stok = $motor->stok;

        $mobil = Mobil::find($data->id_jual);
        if($mobil){
            $data->mesin = $mobil->mesin_mobil;
            $data->kapasitas = $mobil->kapasitas;
            $data->tipe = $mobil->tipe;
            $data->jumlah_stok = $mobil->stok;
            return response()->json([
                "status" => "success",
                "data" => $data
            ], 200);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(Penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Penjualan::find($id);
        $data->update($request->all());
        if ($data) {
            return response()->json([
                "status" => "success",
                "message" => "data successfully changed to db",
                "data" => $data
            ], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Penjualan::find($id);
        if (!$data) {
            return response()->json([
                "status" => "failed",
                "message" => "data not found"
            ], 404);
        }
        $data->delete();
        return response()->json([
            "status" => "success",
            "message" => "data succesfully deleted"
        ], 200);
    }
}
