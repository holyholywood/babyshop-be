<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request, $code = 200, $message = '')
    {

        $res = parent::toArray($request);

        return  [
            "statusCode" => $code,
            "message" => $message,
            "payload" => $res
        ];
    }
}
