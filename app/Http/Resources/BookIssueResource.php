<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookIssueResource extends JsonResource
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
            'book' => new BookResource($this->whenLoaded('book')),
            'student' => new StudentResource($this->whenLoaded('student')),
            'apply_date' => $this->apply_date,
            'issue_date' => $this->issue_date,
            'return_date' => $this->return_date,
            'fine' => $this->late_return_fine,
            'unique_id' => $this->unique_id,
            'status' => $this->status,
            'returned_date' => $this->returned_date,
            'fine_received' => $this->fine_received,
            'id' => $this->id
        ];
    }
}
