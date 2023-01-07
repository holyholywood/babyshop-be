<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Services\ItemService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ItemController extends Controller
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
    public function index(ItemService $Service)
    {
        // return (new ItemResource($Service->getAllData(), 201, 'hello World'));
        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'hello', $Service->getItem()), JsonResponse::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ItemService $Service)
    {
        $body = $request->all();
        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'Success Save Item', $Service->storeItem($body)), JsonResponse::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ItemService $Service)
    {
        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'Success Get Item ID ' . $id, $Service->getItem($id)), JsonResponse::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,  ItemService $Service)
    {
        $data = $request->all();

        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'Success Update Item ID ' . $id, $Service->updateItem($id, $data)), JsonResponse::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ItemService $Service)
    {
        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'Success Delete Item ID ' . $id, $Service->deleteItem($id)), JsonResponse::HTTP_OK);
    }
}
