<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class PublishFormController extends Controller
{
    public function __invoke(Form $form)
    {
        $publish = request()->boolean('publish', false);

        $form->publish($publish);

        return back()->with('success', 'Your form has been published');
    }
}
