<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KlubResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'naziv' => $this->resource->naziv,
            'grad' => $this->resource->grad,
            'email' => $this->resource->email,
            'website' => $this->resource->website,
            'predsednik' => $this->resource->predsednik,
            'liga' => new FudbalskaLigaResource($this->resource->liga)
        ];

    }
}
