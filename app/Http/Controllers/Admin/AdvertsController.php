<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Adverts\StoreAdvertRequest;
use App\Http\Requests\Adverts\UpdateAdvertRequest;
use App\Models\Advert;
use App\Services\Adverts\AdvertService;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{
    /**
     * @var AdvertService
     */
    private $advertService;

    public function __construct(AdvertService $advertService)
    {
        $this->advertService = $advertService;
    }

    public function index()
    {
        return view('admin.adverts.index');
    }

    public function create()
    {
        return view('admin.adverts.create');
    }
    public function edit(Advert $advert) {
        return view('admin.adverts.edit',compact(['advert']));
    }

    public function store(StoreAdvertRequest $request)
    {
        $this->advertService->createAdvert($request->all());
        flash('Объявление добавлено')->success();
        return redirect()->route('admin.adverts.index');
    }

    public function show(Advert $advert)
    {
        return view('admin.adverts.show', compact(['advert']));
    }

    public function update(Advert $advert, UpdateAdvertRequest $request)
    {
        $this->advertService->updateAdvert($advert,$request->all());
        flash('Объявление обновлено')->success();
        return redirect()->route('admin.adverts.index');
    }

    public function destroy(Advert $advert)
    {
        $this->advertService->destroyAdvert($advert);
        flash('Объявление удалено')->success();
        return redirect()->route('admin.adverts.index');
    }
}
