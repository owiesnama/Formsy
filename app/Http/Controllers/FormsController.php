<?php

namespace App\Http\Controllers;

use App\Models\Form;

class FormsController extends Controller
{
    public function index()
    {
        $forms = auth()->user()
            ->forms()
            ->latest()
            ->get();
        return inertia('Forms/Index', [
            'forms' => $forms
        ]);
    }

    public function show(Form $form)
    {
        return inertia('Forms/Show', ['form' => $form->load('user')]);
    }

    public function create()
    {
        return inertia('Forms/Create');
    }

    public function store()
    {
        request()->validate([
            'form.rows' => ['required', 'min:1']
        ]);
        auth()->user()->forms()->create([
            'form' => collect(request('form'))
        ]);

        return redirect()->route('forms.index')->with('success', 'Your form has been saved');
    }
}
