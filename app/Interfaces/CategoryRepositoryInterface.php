<?php

namespace App\Interfaces;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    public function list(): Collection;

    public function activeList(): Collection;

    public function storeOrUpdate(array $data, $id = null): Category;

    public function findById(int $id): Category;

    public function destroyById($id): bool;
}
