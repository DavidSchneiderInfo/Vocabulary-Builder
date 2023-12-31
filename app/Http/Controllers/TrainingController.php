<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\Vocables\GetTrainableVocables;
use App\Http\Requests\SubmitTrainingRequest;
use App\Models\Vocable;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class TrainingController extends Controller
{
    public function __construct(
        private readonly GetTrainableVocables $getTrainableVocables
    ){}
    public function show(Request $request): View
    {
        $level = $request->get('level');

        $vocableQuery = $this->getTrainableVocables
            ->execute($request->user())
            ->inRandomOrder();

        if ($level !== null) {
            $vocableQuery->where('level', '<', $level);
        }

        return view('train')->with('vocable', $vocableQuery->firstOrFail());
    }

    public function submit(SubmitTrainingRequest $request): View
    {
        /** @var Vocable $vocable */
        $vocable = Vocable::findOrFail($request->get('vocable_id'));

        if ($vocable->native_term == $request->get('native_term')) {
            $vocable->levelUp();
            $result = true;
        } else {
            $vocable->resetLevel();
            $result = false;
        }

        return view('result')->with('vocable', $vocable)->with('result', $result);
    }
}
