<?php

namespace App\Policies;

use App\Models\Form;
use App\Models\User;

class ViewingFormPolicy
{
    public function show(?User $user, Form $form): bool
    {
        return $form->user()->is($user) || $form->published_at;
    }
}
