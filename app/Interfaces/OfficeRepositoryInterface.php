<?php

namespace App\Interfaces;

use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;

interface OfficeRepositoryInterface
{
    public function list(): Collection;

    public function activeList(): Collection;

    public function storeOrUpdate(array $data, $id = null): Office;

    public function findById(int $id): Office;

    public function destroyById($id): bool;
}
