<?php

namespace App\Interfaces;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Collection;

interface DriverRepositoryInterface
{
    public function list(): Collection;

    public function activeList(): Collection;

    public function storeOrUpdate(array $data, $id = null): Driver;

    public function findById(int $id): Driver;

    public function destroyById($id): bool;
}
