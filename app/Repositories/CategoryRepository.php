<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(private Category $model)
    {
        $this->model = $model;
    }

    /**
     * All category list.
     */
    public function list(): Collection
    {
        return $this->model->latest()->get();
    }

    /**
     * Active category list.
     */
    public function activeList(): Collection
    {
        return $this->model->where('status', 1)->get();
    }

    /**
     * Create & save Category.
     */
    public function storeOrUpdate(array $data, $id = null): Category
    {
        $cat = $this->model->updateOrCreate(
            ['id' => $id],
            $data
        );
        return $cat;
    }

    /**
     * Find category by id.
     */
    public function findById($id): Category
    {
        return $this->model->find($id);
    }

    /**
     * Delete category by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
