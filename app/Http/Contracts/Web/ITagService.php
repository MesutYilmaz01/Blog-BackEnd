<?php

namespace App\Http\Contracts\Web;

use Illuminate\Database\Eloquent\Collection;

interface ITagService
{
    /**
     * @return Collection
     */
    public function getTags(): Collection;
}
