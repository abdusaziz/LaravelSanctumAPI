<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SidemenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'title' => $this->title,
            'url' => $this->url,
            'slug' => $this->slug,
            'order' => $this->order,
            // 'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            // 'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
            'children' => SidemenuResource::collection($this->whenLoaded('children')),
        ];
        
    }
}
