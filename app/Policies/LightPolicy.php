<?php

namespace App\Policies;

use App\Models\Light;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LightPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any light.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the light.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Light  $light
     * @return mixed
     */
    public function view(User $user, Light $light)
    {
        //
    }

    /**
     * Determine whether the user can create light.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the light.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Light  $light
     * @return mixed
     */
    public function update(User $user, Light $light)
    {
        //
    }

    /**
     * Determine whether the user can delete the light.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Light  $light
     * @return mixed
     */
    public function delete(User $user, Light $light)
    {
        //
    }

    /**
     * Determine whether the user can restore the light.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Light  $light
     * @return mixed
     */
    public function restore(User $user, Light $light)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the light.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Light  $light
     * @return mixed
     */
    public function forceDelete(User $user, Light $light)
    {
        //
    }
}
