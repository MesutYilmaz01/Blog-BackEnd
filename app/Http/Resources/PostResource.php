<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'author' => $this->user->name,
            'title' => $this->title,
            'body' => $this->body,
            'slug' => $this->slug,
            'date' => $this->created_at->format('Y-m-d H:i:s'),
            'commentCount' => $this->commentCount(),
            'comments' => $this->comments,
            'coverImage' => $this->coverImage->path ?? null,
        ];
    }
}
