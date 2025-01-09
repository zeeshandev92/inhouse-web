<?php

namespace App\Repositories;
use App\Interfaces\OfficeRepositoryInterface;
use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;

class OfficeRepository implements OfficeRepositoryInterface
{
    public function __construct(private Office $model)
    {
        $this->model = $model;
    }

    /**
     * All Office list.
     */
    public function list(): Collection
    {
        return $this->model->latest()->get();
    }

    /**
     * Active Office list.
     */
    public function activeList(): Collection
    {
        return $this->model->where('status', 1)->get();
    }

    /**
     * Create & save Office.
     */
    public function storeOrUpdate(array $data, $id = null): Office
    {
        $cat = $this->model->updateOrCreate(
            ['id' => $id],
            $data
        );
        return $cat;
    }

    /**
     * Find Office by id.
     */
    public function findById($id): Office
    {
        return $this->model->find($id);
    }

    /**
     * Delete Office by id.
     */
    public function destroyById($id): bool
    {
        return $this->findById($id)->delete();
    }
}
