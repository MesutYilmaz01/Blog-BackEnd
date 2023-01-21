<?php

namespace App\Http\Controllers\Web;

use App\Http\Contracts\Web\ICategoryService;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @var ICategoryService
     */
    private ICategoryService $categoryService;

    /**
     * @param ICategoryService $categoryService
     */
    public function __construct(ICategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @return CategoryResource
     */
    public function getAll()
    {
        return CategoryResource::collection($this->categoryService->getCategories());
    }
}
