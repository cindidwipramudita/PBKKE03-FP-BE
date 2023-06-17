<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trains;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $train = Trains::orderBy('id', 'DESC')->get();
        $response = [
            'message' => 'List train list order by id',
            'data' => $train
        ];

        return response()->json($response, 200);
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
        $validator = Validator::make($request->all(), [
            'number' => ['required'],
            'name' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $train = Trains::create($request->all());
            $response = [
                'message' => 'Train berhasil ditambahkan',
                'data' => $train
            ];

            return response()->json($response, 200);


        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed: ' . $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $train = Trains::findorFail($id);

        $response = [
            'message' => 'Detail Kereta',
            'data' => $train
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $train = Trains::findorFail($id);

        $validator = Validator::make($request->all(), [
            'number' => ['required'],
            'name' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        try {
            $train->update($request->all());
            $response = [
                'message' => 'Train berhasil diupdate',
                'data' => $train
            ];

            return response()->json($response, 200);


        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed: ' . $e->getMessage()
            ], Response::HTTP_OK);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $train = Trains::findorFail($id);



        try {
            $train->delete();
            $response = [
                'message' => 'Train berhasil dihapus'
            ];

            return response()->json($response, 200);


        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed: ' . $e->getMessage()
            ], Response::HTTP_OK);
        }

    }
}