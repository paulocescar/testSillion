<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Utils\Utils;

class RandomDataResources extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'card' => Utils::formatCreditCardNumbers($this->card),
            'date_of_birth' => Utils::formatDataPtBR($this->date_of_birth)
        ];
    }
}
