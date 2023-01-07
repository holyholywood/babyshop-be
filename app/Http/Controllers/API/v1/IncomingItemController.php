<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Services\IncomingItemService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IncomingItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IncomingItemService $Service)
    {
        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'Success get all incoming items', $Service->getIncomingItem()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, IncomingItemService $Service)
    {
        $body = $request->all();
        return  response()->json(APIResponse(JsonResponse::HTTP_CREATED, 'Success store incoming items', $Service->StoreIncomingItem($body)));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, IncomingItemService $Service)
    {
        return  response()->json(APIResponse(JsonResponse::HTTP_OK, 'Success get one item', $Service->getIncomingItem($id)));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
