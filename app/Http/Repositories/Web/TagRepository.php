<?php

namespace App\Http\Repositories\Web;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;

class TagRepository
{
    /**
     * @return Collection
     */
    public function getTags(): Collection
    {
        return Tag::all();
    }
}
