<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return inertia('Dashboard', [
            'forms' =>  Form::whereNotNull('published_at')->latest()
            ->paginate(10)
        ]);
    }
}
