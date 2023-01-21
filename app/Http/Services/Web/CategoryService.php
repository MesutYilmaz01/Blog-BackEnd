<?php

namespace App\Http\Services\Web;

use App\Http\Repositories\Web\CategoryRepository;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Contracts\Web\ICategoryService;

class CategoryService implements ICategoryService
{
    private CategoryRepository $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * @inheritDoc
     */
    public function getCategories(): Collection
    {
        return $this->categoryRepository->getCategories();
    }
}
