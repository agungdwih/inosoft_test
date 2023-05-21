<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Kendaraan::all();
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
            'tahun keluaran' => 'required|unique:kendaraan|max:255',
            'warna' => 'required',
            'harga' => 'required',
            'jumlah stok' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => "failed",
                "message" => $validator->messages()->first()
            ], 400);
        }
        $data = Kendaraan::create($request->all());
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
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Kendaraan::find($id);
        if (!$data) {
            return response()->json([
                "status" => "failed",
                "message" => "data not found"
            ], 404);
        }
        return response()->json([
            "status" => "success",
            "data" => $data
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kendaraan $kendaraan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Kendaraan::find($id);
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
     * @param  \App\Models\Kendaraan  $kendaraan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kendaraan $kendaraan, $id)
    {
        //
        $data = Kendaraan::find($id);
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
