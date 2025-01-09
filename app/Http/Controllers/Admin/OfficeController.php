<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\OfficeRepositoryInterface;
use App\Mail\OfficeMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OfficeController extends Controller
{
    public function __construct(private OfficeRepositoryInterface $officeRepository) {}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offices = $this->officeRepository->list();
        return view("admin.office.index", compact("offices"));
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
                'email' => 'required',
                'phone_no' => 'required',
                'status' => 'required',
            ]);
            $this->officeRepository->storeOrUpdate($validated);
            Mail::to($validated['email'])->send(new OfficeMail($validated));
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('offices.index'), 'Office created successfully.');
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
            $office = $this->officeRepository->findById($id);
            $editModal = view('admin.office.edit', compact('office'));
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
                'email' => 'required',
                'phone_no' => 'required',
                'status' => 'required',
            ]);
            $this->officeRepository->storeOrUpdate($validated, $id);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return $this->redirectSuccess(route('offices.index'), 'Office updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->officeRepository->destroyById($id);
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
        return  $this->redirectSuccess(route('offices.index'), 'Office deleted successfully');
    }
}
