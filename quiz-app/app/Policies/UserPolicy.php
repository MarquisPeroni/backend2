<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $currentUser
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function view(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
