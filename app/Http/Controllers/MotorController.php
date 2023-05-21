<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use Illuminate\Support\Facades\Validator;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Motor::all();
        return response()->json([
            "status" => "success",
            "data" => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'mesin motor' => 'required|unique:motor|max:255',
            'suspensi' => 'required',
            'transmisi' => 'required',
            'stok' => '',
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status" => "failed",
                "message" => $validator->messages()->first()
            ], 400);
        }
        $data = Motor::create($request->all());
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
     */
    public function show($id)
    {
        //
        $data = Motor::find($id);
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
     */
    public function edit(Motor $motor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $data = Motor::find($id);
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
     */
    public function destroy($id)
    {
        //
        $data = Motor::find($id);
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
