<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Resources\TenantResource;
use App\Http\Requests\CreateTenantRequest;
use App\Http\Requests\UpdateTenantRequest;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();
        return TenantResource::collection($tenants);
    }

    public function show(Tenant $tenant)
    {
        $users = $tenant->load('users');
        return new TenantResource($tenant);
    }

    public function store(CreateTenantRequest $request)
    {
        $tenant = Tenant::create($request->validated());
        return new TenantResource($tenant);
    }

    public function update(UpdateTenantRequest $request, Tenant $tenant)
    {
        $tenant->update($request->validated());
        return new TenantResource($tenant);
    }

    public function destroy(Tenant $tenant)
    {
        $tenant->delete();
        return response()->json(['message' => 'Tenant deleted successfully']);
    }
}
