<?php

namespace App\Http\Repositories\Web;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository
{
    /**
     * @return Collection
     */
    public function getCategories(): Collection
    {
        return Category::all();
    }
}
