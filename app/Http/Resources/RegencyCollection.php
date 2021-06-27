<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\ResourceCollection;
class RegencyCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'success'   => 'satu',
            'message'   => 'dua',
            'data'      => $this->collection->transform(function($item){
                return new RegencyResource($item);
            })
        ];
    }
}
