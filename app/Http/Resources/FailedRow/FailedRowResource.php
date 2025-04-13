<?php

namespace App\Http\Resources\FailedRow;

use Illuminate\Http\Resources\Json\JsonResource;

class FailedRowResource extends JsonResource
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
            'id' =>  $this->id,
            'key' =>  $this->key,
            'message' =>  $this->message,
            'task_id' =>  $this->task_id,
            'row' => $this->row,
            'created_at' =>  $this->created_at->format('Y-m-d'),

        ];
    }
}
