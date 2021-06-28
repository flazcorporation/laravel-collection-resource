<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\ResourceCollection;
class RegencyCollection extends ResourceCollection
{
    public $success, $message;

    public function __construct($success, $message, $data)
    {
        parent::__construct($data);
        $this->success = $success;
        $this->message = $message;        
    }
    public function toArray($request)
    {
        return [
            'success'   => $this->success,
            'message'   => $this->message,
            'data'      => $this->collection->transform(function($item){
                return new RegencyResource($item);
            })
        ];
    }
}
