<?php

namespace App\Policies;

use App\Models\Location;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LocationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any location.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the location.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Location  $location
     * @return mixed
     */
    public function view(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can create location.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the location.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Location  $location
     * @return mixed
     */
    public function update(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can delete the location.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Location  $location
     * @return mixed
     */
    public function delete(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can restore the location.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Location  $location
     * @return mixed
     */
    public function restore(User $user, Location $location)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the location.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Location  $location
     * @return mixed
     */
    public function forceDelete(User $user, Location $location)
    {
        //
    }
}
