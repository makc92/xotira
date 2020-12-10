<?php


namespace App\Services\Veterans;


use App\Models\Veteran;
use App\Services\Veterans\Handlers\CreateVeteranHandler;
use App\Services\Veterans\Handlers\UpdateVeteranHandler;
use App\Services\Veterans\Repositories\VeteranRepository;
use Illuminate\Http\Request;

class VeteranService
{
    /**
     * @var VeteranRepository
     */
    private $veteranRepository;
    /**
     * @var CreateVeteranHandler
     */
    private $createVeteranHandler;
    /**
     * @var UpdateVeteranHandler
     */
    private $updateVeteranHandler;

    public function __construct(VeteranRepository $veteranRepository, CreateVeteranHandler $createVeteranHandler, UpdateVeteranHandler $updateVeteranHandler)
    {
        $this->veteranRepository = $veteranRepository;
        $this->createVeteranHandler = $createVeteranHandler;
        $this->updateVeteranHandler = $updateVeteranHandler;
    }

    public function all()
    {
        return $this->veteranRepository->getAll();
    }

    public function paginate() {
        return $this->veteranRepository->paginate();
    }

    public function searchVeteransByName($text)
    {
        return $this->veteranRepository->searchByName($text);
    }

    public function findVeteran($id)
    {
        return $this->veteranRepository->find($id);
    }

    public function deleteVeteran(Veteran $veteran)
    {
        return $this->veteranRepository->delete($veteran);
    }

    public function createVeteran($data)
    {
        return $this->createVeteranHandler->handle($data);
    }

    public function updateVeteran(Veteran $veteran, array $data)
    {
        return $this->updateVeteranHandler->handle($veteran, $data);
    }
}
