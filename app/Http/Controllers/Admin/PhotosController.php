<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Photos\StorePhotoRequest;
use App\Models\Photo;
use App\Services\Photos\PhotoService;
use App\Services\Photos\Repository\PhotoRepository;
use Illuminate\Http\Request;

class PhotosController extends Controller
{

    /**
     * @var PhotoService
     */
    private $photoService;

    public function __construct(PhotoService $photoService)
    {

        $this->photoService = $photoService;
    }

    public function index()
    {
        return view('admin.photos.index');
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(StorePhotoRequest $request)
    {
        $this->photoService->createPhoto($request->all());
        flash('Photo was created')->success();
        return redirect()->route('admin.photos.index');
    }

    public function destroy(Photo $photo)
    {
        $this->photoService->deletePhoto($photo);
        flash('Photo was deleted')->success();
        return redirect()->route('admin.photos.index');
    }

}
