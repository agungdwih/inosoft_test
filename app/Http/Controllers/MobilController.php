<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Mobil::all();
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
            'mesin_mobil' => 'required|max:255',
            'kapasitas' => 'required',
            'tipe' => 'required',
            'stok' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => "failed",
                "message" => $validator->messages()->first()
            ], 400);
        }
        $data = Mobil::create($request->all());
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
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Mobil::find($id);
        if (!$data) {
            return response()->json([
                "status" => "failed",
                "message" => "data not found"
            ], 404);
        }
        $kendaraan = Kendaraan::find($data->kendaraan_id);
        $data->tahun = $kendaraan->tahun_keluaran;
        $data->warna = $kendaraan->warna;
        $data->harga = $kendaraan->harga;
        $data->jumlah_stok = $kendaraan->jumlah_stok;

        return response()->json([
            "status" => "success",
            "data" => $data
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(Mobil $mobil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Mobil::find($id);
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
     * @param  \App\Models\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Mobil::find($id);
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
