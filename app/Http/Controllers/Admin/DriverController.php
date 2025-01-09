<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\DriverRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function __construct(private DriverRepositoryInterface $driverRepository) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = $this->driverRepository->list();
        return view("admin.driver.index", compact("drivers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'license_type' => 'required',
                'license_no' => 'required',
                'license_expiry_date' => 'required',
                'status' => 'required',
            ]);
            $this->driverRepository->storeOrUpdate($validated);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('drivers.index'), 'Driver created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $driver = $this->driverRepository->findById($id);
            $editModal = view('admin.driver.edit', compact('driver'));
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $editModal;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'license_type' => 'required',
                'license_no' => 'required',
                'license_expiry_date' => 'required',
                'status' => 'required',
            ]);
            $this->driverRepository->storeOrUpdate($validated, $id);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('drivers.index'), 'Driver updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->driverRepository->destroyById($id);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return  $this->redirectSuccess(route('drivers.index'), 'Driver deleted successfully');
    }
}
