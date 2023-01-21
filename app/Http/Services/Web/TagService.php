<?php

namespace App\Http\Services\Web;

use Illuminate\Database\Eloquent\Collection;
use App\Http\Contracts\Web\ITagService;
use App\Http\Repositories\Web\TagRepository;

class TagService implements ITagService
{
    /**
     * @var TagRepository
     */
    private TagRepository $tagRepository;

    /**
     * @param TagRepository $tagRepository
     */
    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * @return Collection
     */
    public function getTags(): Collection
    {
        return $this->tagRepository->getTags();
    }
}
