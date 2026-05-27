<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuestionnaireResponseRequest;
use App\Models\QuestionnaireResponse;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function store(StoreQuestionnaireResponseRequest $request)
    {
        QuestionnaireResponse::create($request->validated());

        return redirect()
            ->route('home')
            ->with('success', 'Jawaban berhasil disimpan.');
    }
}
