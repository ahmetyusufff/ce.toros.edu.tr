<?php


namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Öğrenci Numarası: ' => $this->id,
            'Öğrenci Adı: ' => $this->name.' '.$this->lastname,
            'Telefon: ' => $this->phone
        ];
    }
}
