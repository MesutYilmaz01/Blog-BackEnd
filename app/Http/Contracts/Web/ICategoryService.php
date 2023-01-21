<?php

namespace App\Http\Contracts\Web;

use Illuminate\Database\Eloquent\Collection;

interface ICategoryService
{
    /**
     * @return Collection
     */
    public function getCategories(): Collection;
}
