<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Achievements\StoreAchievementRequest;
use App\Http\Requests\Achievements\UpdateAchievementRequest;
use App\Models\Achievement;
use App\Services\Achievements\AchievementService;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{

    /**
     * @var AchievementService
     */
    private $achievementService;

    public function __construct(AchievementService $achievementService)
    {
        $this->achievementService = $achievementService;
    }

    public function index()
    {
        return view('admin.achievements.index');
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(StoreAchievementRequest $request)
    {
        $this->achievementService->createAchievement($request->all());
        flash('Подвиг добавлен')->success();
        return redirect()->route('admin.achievements.index');
    }

    public function show(Achievement $achievement)
    {
       return view('admin.achievements.show', compact(['achievement']));
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact(['achievement']));
    }

    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $this->achievementService->updateAchievement($achievement, $request->all());
        flash('Подвиг обновлен')->success();
        return redirect()->route('admin.achievements.index');
    }

    public function destroy(Achievement $achievement)
    {
        $this->achievementService->deleteAchievement($achievement);
        flash('Подвиг удален')->success();
        return redirect()->route('admin.achievements.index');
    }
}
