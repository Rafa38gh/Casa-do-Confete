<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Recommendation;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRecommendationRequest;

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
