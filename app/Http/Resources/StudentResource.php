<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'name' => $this->name,
            'dept' => $this->dept,
            'year' => $this->year,
            'semester' => $this->semester,
            'session' => $this->session,
            'student_id' => $this->student_id,
            'id' => $this->id,
        ];
    }
}
