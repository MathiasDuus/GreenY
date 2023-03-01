<?php

namespace App\Policies;

use App\Models\AirPollution;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AirPollutionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any airPollution.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the airPollution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AirPollution  $airPollution
     * @return mixed
     */
    public function view(User $user, AirPollution $airPollution)
    {
        //
    }

    /**
     * Determine whether the user can create airPollution.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the airPollution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AirPollution  $airPollution
     * @return mixed
     */
    public function update(User $user, AirPollution $airPollution)
    {
        //
    }

    /**
     * Determine whether the user can delete the airPollution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AirPollution  $airPollution
     * @return mixed
     */
    public function delete(User $user, AirPollution $airPollution)
    {
        //
    }

    /**
     * Determine whether the user can restore the airPollution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AirPollution  $airPollution
     * @return mixed
     */
    public function restore(User $user, AirPollution $airPollution)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the airPollution.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AirPollution  $airPollution
     * @return mixed
     */
    public function forceDelete(User $user, AirPollution $airPollution)
    {
        //
    }
}
