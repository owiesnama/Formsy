<?php

namespace App\Http\Controllers;

use App\Models\Form;

class FormSubmitionController extends Controller
{
    public function __invoke(Form $form)
    {
        $attributes = request()->except('_token');
        $form->submitions()->create([
            'body' => collect($attributes)
        ]);
        return redirect()->route('dashboard')->with('success', 'Your submitions has been registered');
    }
}
