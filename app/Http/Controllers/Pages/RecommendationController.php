<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecommendationRequest;
use App\Http\Requests\UpdateRecommendationRequest;

class RecommendationController extends Controller
{
    public function index(Recommendation $recommendation)
    {
        $recommendations = $recommendation->all();

        return view('/cruds/recommendations/index', compact('recommendations'));
    }

    public function create()
    {
        return view('/cruds/recommendations/create');
    }

    public function store(StoreRecommendationRequest $request,Recommendation $recommendation)
    {
        $data = $request->only(['body']);

        $recommendations = $recommendation->create($data);

        return redirect()->route('admin.recommendations');
    }

    public function edit(string|int $id)
    {
        $recommendation = Recommendation::find($id);

        return view('/cruds/recommendations/edit', compact('recommendation'));
    }

    public function update(UpdateRecommendationRequest $request, $id)
    {
        $recommendation = Recommendation::find($id);
        $recommendation->body = $request->input('body');
        $recommendation->save();

        return redirect()->route('admin.recommendations')->with('success', 'Recomendação atualizada com sucesso.');
    }

    public function destroy(string|int $id)
    {
        if(!$recommendation = Recommendation::find($id))
        {
            return back();
        }

        $recommendation->delete();

        return redirect()->route('admin.recommendations');
    }
}
