<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Services\ItemService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ItemService $Service)
    {
        // return (new ItemResource($Service->getAllData()));
        return  response()->json([
            'code' => JsonResponse::HTTP_OK,
            'data' => $Service->getAllData(),
        ], JsonResponse::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  response()->json([
            'code' => JsonResponse::HTTP_OK,
            'data' => 'store',
        ], JsonResponse::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return  response()->json([
            'code' => JsonResponse::HTTP_OK,
            'data' => $id,
        ], JsonResponse::HTTP_OK);
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
        return  response()->json([
            'code' => JsonResponse::HTTP_OK,
            'data' => $id,
        ], JsonResponse::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return  response()->json([
            'code' => JsonResponse::HTTP_OK,
            'data' => $id,
        ], JsonResponse::HTTP_OK);
    }
}
