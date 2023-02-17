<?php

namespace App\Policies;

use App\Models\FirstTimeSetup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FirstTimeSetupPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return mixed
     */
    public function view(User $user, FirstTimeSetup $firstTimeSetup)
    {
        //
    }

    /**
     * Determine whether the user can create firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return mixed
     */
    public function update(User $user, FirstTimeSetup $firstTimeSetup)
    {
        //
    }

    /**
     * Determine whether the user can delete the firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return mixed
     */
    public function delete(User $user, FirstTimeSetup $firstTimeSetup)
    {
        //
    }

    /**
     * Determine whether the user can restore the firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return mixed
     */
    public function restore(User $user, FirstTimeSetup $firstTimeSetup)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the firstTimeSetup.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return mixed
     */
    public function forceDelete(User $user, FirstTimeSetup $firstTimeSetup)
    {
        //
    }
}
