<?php


namespace App\Services\Veterans\Repositories;


use App\Models\Veteran;
use Illuminate\Database\Eloquent\Builder;

class VeteranRepository
{
    /**
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return Veteran::with('translation')->orderBy('id', 'desc')->get();
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate()
    {
        return Veteran::with('translation')->orderBy('id', 'desc')->paginate(10);
    }

    /**
     * @param $text
     * @return mixed
     */
    public function searchByName($text)
    {
        return Veteran::with('translation')->whereTranslationLike('name', '%' . $text . '%')->orderBy('id', 'desc')->paginate(10);
    }

    /**
     * @param $id
     * @return Veteran|Veteran[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function find($id)
    {
        return Veteran::find($id);
    }

    /**
     * @param Veteran $veteran
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Veteran $veteran)
    {
        return $veteran->delete();
    }

    /**
     * @param $data
     * @return Veteran|\Illuminate\Database\Eloquent\Model
     */
    public function createFromArray($data)
    {
        return Veteran::create($data);
    }

    public function updateFromArray(Veteran $veteran, array $data)
    {
        $veteran = $veteran->update($data);
        return $veteran;
    }
}
