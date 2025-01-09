<?php

namespace App\Repositories;

use App\Interfaces\DriverRepositoryInterface;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Collection;

class DriverRepository implements DriverRepositoryInterface
{
    public function __construct(private Driver $model)
    {
        $this->model = $model;
    }

    /**
     * All Driver list.
     */
    public function list(): Collection
    {
        return $this->model->latest()->get();
    }

    /**
     * Active Driver list.
     */
    public function activeList(): Collection
    {
        return $this->model->where('status', 1)->get();
    }

    /**
     * Create & save Driver.
     */
    public function storeOrUpdate(array $data, $id = null): Driver
    {
        $cat = $this->model->updateOrCreate(
            ['id' => $id],
            $data
        );
        return $cat;
    }

    /**
     * Find Driver by id.
     */
    public function findById($id): Driver
    {
        return $this->model->find($id);
    }

    /**
     * Delete Driver by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
