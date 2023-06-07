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
        $message = (!$publish) ? 'Your form has been published' : 'Your form has been un-published';
        return back()->with('success', $message);
    }
}
