<?php

namespace App\Policies;

use App\Models\Temperature;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TemperaturePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any temperature.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the temperature.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Temperature  $temperature
     * @return mixed
     */
    public function view(User $user, Temperature $temperature)
    {
        //
    }

    /**
     * Determine whether the user can create temperature.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the temperature.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Temperature  $temperature
     * @return mixed
     */
    public function update(User $user, Temperature $temperature)
    {
        //
    }

    /**
     * Determine whether the user can delete the temperature.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Temperature  $temperature
     * @return mixed
     */
    public function delete(User $user, Temperature $temperature)
    {
        //
    }

    /**
     * Determine whether the user can restore the temperature.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Temperature  $temperature
     * @return mixed
     */
    public function restore(User $user, Temperature $temperature)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the temperature.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Temperature  $temperature
     * @return mixed
     */
    public function forceDelete(User $user, Temperature $temperature)
    {
        //
    }
}
