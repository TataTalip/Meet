<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MeetResource extends JsonResource
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
            'type'          => 'meets',
            'id'            => (string)$this->id,
            'attributes'    => [
                'title' => $this->name,
                'city' => $this->cityMeet,
                'date' => $this->created_at,
            ],
        ];
    }
}
