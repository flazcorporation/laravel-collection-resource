<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class RegencyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_provinsi' => $this->id,
            'nama_provinsi' => $this->name,
            'jumlah_kabupaten'  => $this->regencies->count(),
            'kabupaten' => $this->regencies
        ];
    }
}
