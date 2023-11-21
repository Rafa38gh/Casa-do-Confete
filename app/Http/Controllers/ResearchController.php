<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResearchRequest;
use Illuminate\Http\Request;
use App\Models\Research;

class ResearchController extends Controller
{
    public function index(Research $research)
    {
        $researches = $research->all();

        return view('cruds/research/index', compact('researches'));
    }

    public function create()
    {
        return view('cruds/research/create');
    }

    public function store(StoreResearchRequest $request, Research $research)
    {
        $data = $request->only(['answer1', 'answer2', 'answer3']);

        $research = $research->create($data);

        return redirect()->route('dashboard')->with('Pesquisa respondida com sucesso');
    }
}
