<?php

namespace App\Http\Resources\Task;

use App\Http\Resources\File\FileResource;
use App\Http\Resources\User\UserResource;
use App\Models\Task;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'user' => new UserResource($this->user),
            'file' => new FileResource($this->file),
            'status'=> Task::getStatuses()[$this->status],
        ];
    }
}
