<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.veterans.create');
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

    public function store(Request $request)
    {
        $this->veteranService->createVeteran($request->all());
        flash('Veteran was created')->success();
        return redirect()->route('admin.veterans.index');
    }
}
