<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Veteran\StoreVeteranRequest;
use App\Http\Requests\Veteran\UpdateVeteranRequest;
use App\Models\Region;
use App\Models\Veteran;
use App\Services\Veterans\VeteranService;
use Illuminate\Http\Request;

class VeteransController extends Controller
{
    /**
     * @var VeteranService
     */
    private $veteranService;

    public function __construct(VeteranService $veteranService)
    {
        $this->veteranService = $veteranService;
    }

    public function index()
    {
        return view('admin.veterans.index');
    }

    public function create()
    {
        $regionList = Region::pluck('title', 'id')->map(function ($region){
            return __('regions.' . $region);
        })->toArray();
        return view('admin.veterans.create', compact(['regionList']));
    }

    public function show(Veteran $veteran)
    {
        return view('admin.veterans.show', compact(['veteran']));
    }

    public function destroy(Veteran $veteran)
    {
        $this->veteranService->deleteVeteran($veteran);
        flash('Veteran deleted')->success();
        return redirect()->route('admin.veterans.index');
    }

    public function store(StoreVeteranRequest $request)
    {
        $this->veteranService->createVeteran($request->all());
        flash('Veteran was created')->success();
        return redirect()->route('admin.veterans.index');
    }

    public function edit(Veteran $veteran)
    {
        $regionList = Region::pluck('title', 'id')->map(function ($region){
            return __('regions.' . $region);
        })->toArray();
        $selectedRegion = $veteran->region->id;
        return view('admin.veterans.edit', compact(['veteran', 'regionList', 'selectedRegion']));
    }

    public function update(Veteran $veteran, UpdateVeteranRequest $request)
    {
        $this->veteranService->updateVeteran($veteran, $request->all());
        flash('Veteran was updated')->success();
        return redirect()->route('admin.veterans.index');
    }
}
